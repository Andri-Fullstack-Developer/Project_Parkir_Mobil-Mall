document.addEventListener("keydown", function (event) {
    if (event.code === "Enter") {
        event.preventDefault();
        const form = event.target.form;
        const index = Array.prototype.indexOf.call(form, event.target);
        form.elements[index + 1].focus();
    }
});
