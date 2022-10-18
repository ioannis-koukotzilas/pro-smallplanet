document.querySelectorAll(':is(vimeo-embed, youtube-embed) button').forEach((button) =>
  button.addEventListener('click', () => {
    const video = button.previousElementSibling;
    video.src = video.dataset.src;
  })
);
