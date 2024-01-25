import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

let sections1 = gsap.utils.toArray(".home-projects__section1 .project");

const options1 =  {
    xPercent: -100 * (sections1.length - 1),
    ease: "none",
    scrollTrigger: {
        trigger: ".home-projects__section1",
        pin: true,
        scrub: 1,
        //snap: 1 / (sections1.length - 1),
        end: "+=4000",
    }
};

gsap.to(sections1, options1);


let sections3= gsap.utils.toArray(".home-projects__section3 .project");

const options3 =  {
    xPercent: -100 * (sections3.length - 1),
    ease: "none",
    scrollTrigger: {
        trigger: ".home-projects__section3",
        pin: true,
        scrub: 1,
        snap: 1 / (sections3.length - 1),
        end: "+=4000",
    }
};

gsap.to(sections3, options3);