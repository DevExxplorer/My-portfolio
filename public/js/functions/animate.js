import { gsap } from "gsap";

// HOME - HERO
const blocs = document.querySelectorAll('.bloc span');
let speed = 0;

blocs.forEach((bloc) => {
    gsap.to(bloc, {
        y: 0,
        delay: speed,
    })

    speed = speed + 0.1;
});

gsap.to('.line', {
    width:' 70%',
    delay: 3,
})
