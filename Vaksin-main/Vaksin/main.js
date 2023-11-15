document.addEventListener("DOMContentLoaded", ()=> {
    function counter(id, start, end, duration){
        let obj = document.getElementById(id),
        current = start,
        range = end - start,
        increment = end > start ? 1 : -1,
        step = Math.abs(Math.floor(duration / range)),
        timer = setInterval(() => {
            current 
            += increment;
            obj.textContent = current;
            if(current == end){
                clearInterval(timer);
            }
        }, step);
    }
    counter("count1", 12000000,  12518398, )
    counter("count2", 10000000,   10683640,1 )
    counter("count3", 3500000,   3762442,1 )
});