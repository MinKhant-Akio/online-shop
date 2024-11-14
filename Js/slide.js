// let scrollContainer = document.querySelector(".gallery");
// let backBtn = document.getElementById("backBtn");
// let nextBtn = document.getElementById("nextBtn");

// scrollContainer.addEventListener("wheel",(e)=>{
//     e.preventDefault();
//     scrollContainer.style.scrollBehavior = "smooth";
//     scrollContainer.scrollLeft += e.deltaY;
// });

// nextBtn.addEventListener("click",()=>{
//     scrollContainer.style.scrollBehavior = "smooth";
//     scrollContainer.scrollLeft+=1200;
// });
// backBtn.addEventListener("click",()=>{
//     scrollContainer.style.scrollBehavior = "smooth";
//     scrollContainer.scrollLeft-=1200;
// });
let scrollContainer = document.querySelector(".gallery");
let backBtn = document.getElementById("backBtn");
let nextBtn = document.getElementById("nextBtn");

// Determine scroll amount based on screen size
function getScrollAmount() {
    if (window.innerWidth <= 600) {
        return 300; // Small screen scroll amount
    } else if (window.innerWidth <= 1024) {
        return 600; // Medium screen scroll amount
    } else {
        return 1200; // Large screen scroll amount
    }
}

scrollContainer.addEventListener("wheel", (e) => {
    e.preventDefault();
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft += e.deltaY;
});

nextBtn.addEventListener("click", () => {
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft += getScrollAmount();
});

backBtn.addEventListener("click", () => {
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft -= getScrollAmount();
});

// Update scroll amount when window is resized
window.addEventListener("resize", () => {
    // Optionally, you can update the scroll amount dynamically on resize if needed.
});
