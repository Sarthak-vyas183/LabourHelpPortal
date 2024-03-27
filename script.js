let pro_info = document.querySelector(".pro-Detail");
let userType = document.querySelector("#userType");

userType.addEventListener('change', function() {
    if (userType.value === 'labour' || userType.value === 'contractor') {
        pro_info.style.display = "flex";
        pro_info.style.flexDirection = "column";
    } else if (userType.value === 'user') {
        pro_info.style.display = "none";
    }
});
