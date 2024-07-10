document.querySelectorAll('.dropdown').forEach(drop => {
    drop.addEventListener('mouseenter', function() {
        this.querySelector('.dropdown-content').style.display = 'block';
    });
    drop.addEventListener('mouseleave', function() {
        this.querySelector('.dropdown-content').style.display = 'none';
    });
});

document.querySelectorAll('.dropdown-sub').forEach(subDrop => {
    subDrop.addEventListener('mouseenter', function() {
        this.querySelector('.dropdown-sub-content').style.display = 'block';
    });
    subDrop.addEventListener('mouseleave', function() {
        this.querySelector('.dropdown-sub-content').style.display = 'none';
    });
});
