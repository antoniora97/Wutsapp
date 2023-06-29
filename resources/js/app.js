import "./bootstrap";

let openProfile = document.getElementById("open-profile")
let closeProfile = document.getElementById("close-profile")
let profile = document.getElementById("profile")

openProfile.addEventListener("click", () => {
    profile.classList.remove('hidden')
    profile.style.left = '-100%';
    setTimeout(() => {
        profile.style.transition = 'left 0.2s'
        profile.style.left = '0';
    }, 200);
})

closeProfile.addEventListener('click', () => {
    profile.style.left = '-100%';
    setTimeout(() => {
        profile.classList.add('hidden');
    }, 200);
})
