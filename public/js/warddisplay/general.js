$(document).ready(function () {

    // const ward = "{{ request()->route('ward') }}";

    function rebuildPatientSlides() {
        const allRows = Array.from(document.querySelectorAll("#patient-rows-wrapper tr.patient-row"));
        const container = document.querySelector(".carousel-inner");
        const maxHeight = 700;
    
        // 🧹 Remove only existing patient slides (not the static ones)
        const existingPatientSlides = container.querySelectorAll(".carousel-item[data-patient-slide='true']");
        existingPatientSlides.forEach(slide => slide.remove());
    
        let currentSlide = null;
        let currentTbody = null;
    
        function startNewSlide() {
            const slide = document.createElement("div");
            slide.classList.add("carousel-item");
            slide.setAttribute("data-patient-slide", "true"); // 📌 Mark it for future cleanup
    
            // If there are no other patient slides, set this as active
            if (!container.querySelector(".carousel-item.active")) {
                slide.classList.add("active");
            }
    
            const outer = document.createElement("div");
            outer.className = "row mt-10 px-5";
    
            const card = document.createElement("div");
            card.className = "card card-custom";
            Object.assign(card.style, {
                width: "100%",
                borderRadius: "10px",
                backgroundColor: "#e1faff",
                border: "1px solid #ddd",
                padding: "1.5rem"
            });
    
            const header = document.createElement("div");
            Object.assign(header.style, {
                backgroundColor: "#007dca",
                padding: "7px",
                borderRadius: "10px",
                textAlign: "center"
            });
            header.innerHTML = `<span style="color: #fff; font-weight: 1000; -webkit-text-stroke: 1px black; font-size: 22px;">Patients</span>`;
    
            const wrapper = document.createElement("div");
            wrapper.className = "table-responsive";
    
            const table = document.createElement("table");
            table.className = "table table-striped m-0";
            Object.assign(table.style, {
                width: "100%",
                tableLayout: "fixed",
                fontSize: "1.7rem",
                borderCollapse: "collapse",
                border: "1px solid #ffffff"
            });
    
            const thead = document.createElement("thead");
            thead.innerHTML = `
                <tr style="background-color: #3fdcff; color: #000; font-weight: 600" class="text-center">
                    <th style="width: 10%; padding: 2px; border: 1px solid #ffffff;">Bed</th>
                    <th style="width: 9%; padding: 2px; border: 1px solid #ffffff;">Status</th>
                    <th style="width: 8%; padding: 2px; border: 1px solid #ffffff;">MRN</th>
                    <th style="width: 10%; padding: 2px; border: 1px solid #ffffff;">Doctor</th>
                    <th style="width: 10%; padding: 2px; border: 1px solid #ffffff;">Procedure / Surgery</th>
                    <th style="width: 15%; padding: 2px; border: 1px solid #ffffff;">Nil By Mouth</th>
                    <th style="width: 10%; padding: 2px; border: 1px solid #ffffff;">LOS</th>
                    <th style="width: 13%; padding: 2px; border: 1px solid #ffffff;">Alert</th>
                    <th style="width: 15%; padding: 2px; border: 1px solid #ffffff;">Remarks</th>
                </tr>
            `;
    
            currentTbody = document.createElement("tbody");
            Object.assign(currentTbody.style, {
                color: "#000",
                fontWeight: "400"
            });
    
            table.appendChild(thead);
            table.appendChild(currentTbody);
            wrapper.appendChild(table);
            card.appendChild(header);
            card.appendChild(document.createElement("br"));
            card.appendChild(wrapper);
            outer.appendChild(card);
            slide.appendChild(outer);
    
            container.appendChild(slide);
            currentSlide = slide;
        }
    
        // 👷 Start building first slide
        startNewSlide();
    
        allRows.forEach((row) => {
            currentTbody.appendChild(row.cloneNode(true));
    
            // 📐 Check height and split to next slide if needed
            currentSlide.style.visibility = "hidden";
            currentSlide.style.display = "block";
            const isTooTall = currentSlide.offsetHeight > maxHeight;
            currentSlide.style.display = "";
            currentSlide.style.visibility = "";
    
            if (isTooTall) {
                currentTbody.removeChild(currentTbody.lastChild);
                startNewSlide();
                currentTbody.appendChild(row.cloneNode(true));
            }
        });
    }
    
    function refreshSections() {
        $("#cardiothoracic-section").load("/refresh/cardiothoracic");
        $("#cardiology-section").load("/refresh/cardiology");
        $("#nursemanager-section").load("/refresh/nursemanager");
        $("#anaesthesia-section").load("/refresh/anaesthesia");
        $("#pchc-section").load("/refresh/pchc");
        $("#other-section").load("/refresh/other");
    }

    setInterval(function () {
        $("#ert-section").load("/refresh/ert?ward=" + ward);
    }, 10000);

    setInterval(function () {
        $("#sa-section").load("/refresh/sa?ward=" + ward);
    }, 10000);

    setTimeout(() => {
        const index = parseInt(localStorage.getItem('currentSlideIndex'), 10);

        if (!isNaN(index)) {
            const carousel = $('#carouselExampleControls');
            const slides = carousel.find('.carousel-item');

            if (index >= 0 && index < slides.length) {
                // Remove existing active
                slides.removeClass('active');
                $(slides[index]).addClass('active');
            }

            // Clear it so it doesn't persist forever
            localStorage.removeItem('currentSlideIndex');
        }
    }, 300);

    setInterval(function () {
        const activeSlide = document.querySelector('.carousel-item.active');
        const allSlides = Array.from(document.querySelectorAll('.carousel-inner .carousel-item'));
        const currentIndex = allSlides.indexOf(activeSlide);
    
        // Save current index to localStorage
        localStorage.setItem('currentSlideIndex', currentIndex);
    
        // Reload full page
        location.reload();
    }, 180000); // 3 minute

    // ✅ Delay the initial rebuild until DOM is stable and rows exist
    setTimeout(() => {
        const rowCount = document.querySelectorAll("#patient-rows-wrapper tr.patient-row").length;
        if (rowCount > 0) {
            console.log(`✅ Initial patient rows found: ${rowCount}`);
            rebuildPatientSlides();
        } else {
            console.warn("⚠️ No initial patient rows found, skipping rebuild");
        }
    }, 500); // Adjust if needed

    function updateLastUpdatedTime() {
        const now = new Date();
        const options = {
            day: '2-digit',
            month: '2-digit',
            year: 'numeric',
            hour: 'numeric',
            minute: '2-digit',
            hour12: true
        };
        const formatted = now.toLocaleString('en-GB', options).replace(',', '');
        document.getElementById('last-updated-time').textContent = formatted;
    }

    function updateDateTime() {
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        document.getElementById('live-clock').textContent = `${hours}:${minutes}:${seconds}`;

        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = now.toLocaleDateString('en-GB', options);
        document.getElementById('live-date').textContent = formattedDate;
    }

    // Initial load
    refreshSections();
    updateDateTime();
    updateLastUpdatedTime();

    // Timers
    setInterval(updateLastUpdatedTime, 1000000);
    setInterval(refreshSections, 100000);
    setInterval(updateDateTime, 1000);

});
