import tippy from 'tippy.js';

tippy('.skill', {
    placement: 'top',
});

tippy('.footer-logo[data-tippy-content="back to top!"]', {
    placement: 'bottom',
});

tippy('.code-dropdown-btn[data-tippy-content="code snippet!"]', {
    placement: 'top',
});

tippy('#outdoors' , {
    content: "<div style='display: grid; place-items: center; width: 100%; height: 100%; gap: 8px; padding: 4px 0px;'><img src='./media/tippy/outdoors.jpg' style='width: 100%; height: 100%; border-radius: 8px;'></div>",
    allowHTML: true,
    placement: 'top',
});

tippy('#concert' , {
    content: "<div style='display: grid; place-items: center; width: 100%; height: 100%; gap: 8px; padding: 4px 0px;'><img src='./media/tippy/concert.jpg' style='width: 100%; height: 100%; border-radius: 8px;'></div>",
    allowHTML: true,
    placement: 'top',
});

