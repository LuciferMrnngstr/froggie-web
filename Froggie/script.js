const toggle = document.querySelector('#sidebar-btn img');
const sidebar = document.querySelector('.sidebar');
const navItems = document.querySelectorAll('nav .nav-items');

toggle.addEventListener('click', () => {

    if (sidebar.className === 'sidebar') {
        sidebar.classList.add('open');
        toggle.classList.add('active');
    }
    else {
        sidebar.classList.remove('open');
        toggle.classList.remove('active')
    }

});

navItems.forEach(navItem => {

    navItem.addEventListener('click', () => {

        navItems.forEach(navItem => {
            navItem.classList.remove('active');
        });

        navItem.classList.add('active');

    });

});

const progressDialog = document.querySelector('.progress-cont dialog');

const openDialog = () => {
    if (sidebar.className === 'sidebar open') {
        progressDialog.style.left = 948 + 'px';
    } else {
        progressDialog.style.left = 895 + 'px';
    }

    progressDialog.showModal();
}

const closeDialog = () => {
    progressDialog.close();
}

const progressBars = document.querySelectorAll('.column');

progressBars.forEach(progressBar => {

    const circle = progressBar.querySelector('.circle');
    const progress = progressBar.querySelector('.progress');
    const percent = progressBar.querySelector('.percent');

    let progressed = 0;

    const startProgress = () => {

        progressed += 1;

        if (progressed <= progressBar.getAttribute('data-percent')) {

            circle.style.top = progressed + '%';
            percent.innerHTML = progressed + '%';
            progress.style.height = progressed + '%';

        }

        requestAnimationFrame(startProgress);

    };

    requestAnimationFrame(startProgress);

});