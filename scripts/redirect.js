function hide(id) {
    window.location = 'scripts/hide.php?id='+id;
}

function counter(id, counter) {
    if (counter == "+") {
        window.location = 'scripts/plus.php?id='+id;
    }
}

function counter_(id, counter) {
    if (counter =="-") {
        window.location = 'scripts/minus.php?id='+id;
    }
}