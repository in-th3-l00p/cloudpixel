import './bootstrap';

// toggling dark mode via localStorage
if (localStorage.getItem("theme") == "dark")
    document.documentElement.classList.add("dark");
else
    document.documentElement.classList.add("light");

document.getElementById("theme-toggler").onclick = () => {
    if (document.documentElement.classList.contains("dark")) {
        localStorage.setItem("theme", "light");
        document.documentElement.classList.remove("dark");
        document.documentElement.classList.add("light");
    } else {
        localStorage.setItem("theme", "dark");
        document.documentElement.classList.remove("light");
        document.documentElement.classList.add("dark");
    }
}