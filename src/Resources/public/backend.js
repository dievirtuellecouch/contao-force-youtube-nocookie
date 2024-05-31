(function() {
    const init = function() {
        const checkbox = document.querySelector('input[type="checkbox"][name="youtubeOptions[]"][value="youtube_nocookie"]');
        if (checkbox === null) {
            return;
        }
    
        checkbox.disabled = true;
        checkbox.checked = true;
    }

    if (document.readyState === 'interactive' || document.readyState === 'complete' ) {
        init();
    }
    else {
        document.addEventListener('DOMContentLoaded', init);
    }
})();
