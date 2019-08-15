var number = document.querySelector('.number'),
numberTop = number.getBoundingClientRect().top;

window.addEventListener('scroll', function onScroll(){
if (window.pageYOffset > numberTop - window.innerHeight) {
	this.removeEventListener('scroll', onScroll);

function animateValue(id, start, end, increment) {
        let current = start;
        let obj = document.getElementById(id);
        let timer = setInterval(function() {
            current += increment;
            obj.innerHTML = current;
            if (current == end) {
                clearInterval(timer);
            }
        }, 200);
    }

    animateValue("value1", 0, 28, 2);
    animateValue("value2", 0, 140, 10);
    animateValue("value3", 0, 84, 6);
    animateValue("value4", 0, 56, 4);

        }
});