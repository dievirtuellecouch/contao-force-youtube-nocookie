(function() {
    const checkbox = document.querySelector('input[type="checkbox"][name="youtubeOptions"][value="youtube_nocookie"]');
    if (checkbox === null) {
        return;
    }

    checkbox.disabled = true;
})();
