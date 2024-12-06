async function loadProjects() {
    const response = await fetch('./data/cards.json');
    const projects = await response.json();
    const projectCards = document.querySelector('.project-cards');

    projects.forEach(project => {
        const card = document.createElement('a');
        card.classList.add('project', 'gap-24', project.category);
        card.setAttribute('onclick', `window.location.href='${project.url}'`);

        const imageContainer = document.createElement('div');
        imageContainer.classList.add('project-img-container');

        if (project.image) {
            const image = document.createElement('img');
            image.classList.add('project-img');
            image.draggable = false;
            image.src = project.image;
            image.setAttribute('alt', project.title + ' - ' + project.subtitle);

            imageContainer.appendChild(image);
        } else {
            const placeholder = document.createElement('p');
            placeholder.textContent = '...';
        }

        card.appendChild(imageContainer);

        const tagsContainer = document.createElement('div');
        tagsContainer.classList.add('project-chips', 'flex', 'gap-16', 'wrap');
        project.tags.forEach(tag => {
            const tagElement = document.createElement('p');
            tagElement.classList.add(tag.class1, tag.class2);

            if (tag.icon != '') {
                const icon = document.createElement('img');
                icon.src = tag.icon;
                icon.setAttribute('alt', tag.alt);

                tagElement.appendChild(icon);
            }

            tagElement.textContent = tag.name;

            tagsContainer.appendChild(tagElement);
        });

        card.appendChild(tagsContainer);

        const projectDescription = document.createElement('div');
        projectDescription.classList.add('project-description', 'flex', 'col', 'gap-8');

        const titleGroup = document.createElement('hgroup');

        const title = document.createElement('h3');
        title.textContent = project.title;

        const subtitle = document.createElement('h4');
        subtitle.textContent = project.subtitle;

        const description = document.createElement('p');
        description.textContent = project.description;

        titleGroup.appendChild(title);
        titleGroup.appendChild(subtitle);

        projectDescription.appendChild(titleGroup);
        projectDescription.appendChild(description);

        card.appendChild(projectDescription);

        const arrow = document.createElement('img');
        arrow.classList.add('project-arrow');

        if (project.category != 'soon') {
            arrow.src = '../icons/ui/black-arrow.svg';
        } else {
            arrow.src = '../icons/ui/white-arrow.svg';
        }

        card.appendChild(arrow);
        projectCards.appendChild(card);
    });
}

document.addEventListener('DOMContentLoaded', loadProjects());