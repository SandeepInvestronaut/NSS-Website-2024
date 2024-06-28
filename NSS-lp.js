/* Mobile Navbar */
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
  /* Toggle active class */
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");

  /* Toggle aria-expanded value */
  let menuOpen = navMenu.classList.contains("active");
  //   console.log(menuOpen)
  let newMenuOpenStatus = menuOpen;
  hamburger.setAttribute("aria-expanded", newMenuOpenStatus);
});

// close mobile menu
document.querySelectorAll(".nav-link").forEach((n) =>
  n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
    //   Need to add Toggle aria-expanded value here as well because it stays as true when you click a menu item
  })
);

/*Number Count On load*/

document.addEventListener("DOMContentLoaded", () => {
  function counter(id, start, end, duration) {
    let obj = document.getElementById(id);
    let current = start;
    let range = end - start;
    let increment = end > start ? 1 : -1;
    let step = Math.abs(Math.floor(duration / range));
    let timer = setInterval(() => {
      current += increment;
      obj.textContent = current;
      if (current == end) {
        clearInterval(timer);
      }
    }, step);
  }

  counter("count1", 0, 56, 2000);
  counter("count2", 0, 30, 1000);
  counter("count3", 0, 12, 1500);
  counter("count4", 0, 3330, 2000);
  counter("count5", 0, 5000, 2000);
});

/*Programs Card Owl-Scroll*/
const programs = [
  {
    Pbgimg: "Assets/c_1.png",
    Ciocn: "Assets/calender.png",
    Licon: "Assets/location.png",
    Cicon_text: "6th August 2023",
    Licon_text: "Anandvan-1, NIBM Road Kondhwa, Pune",
    title: "Tree Plantation Drive",
    subtitle: "BRACT had successfully completed a Tree Plantation Drive...",
    Rmore: "Read More",
  },
  {
    Pbgimg: "Assets/c_2.png",
    Ciocn: "Assets/calender.png",
    Licon: "Assets/location.png",
    Cicon_text: "13th August 2023",
    Licon_text: "Saint Crispin’s Home krave road.",
    title: "Food Donation Drive",
    subtitle: "This initiative by BRACT involved food donation drives at...",
    Rmore: "Read More",
  },
  {
    Pbgimg: "Assets/c_3.png",
    Ciocn: "Assets/calender.png",
    Licon: "Assets/location.png",
    Cicon_text: "19th August 2023",
    Licon_text: "In front of E-Building VIIT College Pune",
    title: "Plastic Waste Management",
    subtitle:
      "The ‘Plastic waste management’ was a ground-breaking initiative aimed...",
    Rmore: "Read More",
  },
];

function createProgramHTML(program) {
  return `
        <div class="item">
            <div class="card_one">
                <img src="${program.Pbgimg}" alt class="mw-100" />
                <div class="calender">
                    <span><img src="${program.Ciocn}" alt />${
    program.Cicon_text
  }</span>
                </div>
                <div class="location">
                    <span><img src="${program.Licon}" alt />${
    program.Licon_text
  }</span>
                </div>
                <p class="card_one_text">${program.title}</p>
                <p class="card_one_two">
                    ${program.subtitle.split("...")[0]}
                    <span class="extra-text hidden">${
                      program.subtitle.split("...")[1]
                    }</span>
                </p>
                <button class="toggle-button" onclick="toggleText(this)">Read More</button>
            </div>
        </div>
    `;
}

function toggleText(button) {
  const extraText = button.previousElementSibling.querySelector(".extra-text");
  if (extraText.classList.contains("hidden")) {
    extraText.classList.remove("hidden");
    button.textContent = "Read Less";
  } else {
    extraText.classList.add("hidden");
    button.textContent = "Read More";
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const owlCarousel = document.getElementById("owl-demo1");
  programs.forEach((program) => {
    owlCarousel.innerHTML += createProgramHTML(program);
  });
  $("#owl-demo1").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 3,
      },
    },
  });
});

/* Testimonial Section */
const Testimonials = [
  {
    Tavatar: "Assets/t_one.png",
    Tname: "Priya Singh",
    Tdesignation: "Computer Science Engineering",
    Tinfo:
      "The tree plantation drive was a refreshing break from the usual classroom routine. It allowed us, engineering students, to apply our problem-solving skills in a new way – addressing environmental issues. Planting trees and learning about their role in combating pollution was not only educational but physically rewarding. Witnessing the collective effort result in a new patch of green on campus instilled a sense of ownership and responsibility for the environment. I'm looking forward to participating in future drives and ensuring the trees we planted flourish.",
  },
  {
    Tavatar: "Assets/t_two.png",
    Tname: "Rajiv Sharma",
    Tdesignation: "Mechanical Engineering",
    Tinfo:
      "Participating in the blood donation drive at college was a truly humbling experience. As an engineering student, I'm used to problem-solving with calculations, but this drive helped me understand the human cost of those problems. Seeing the relief on the faces of potential recipients as they learned about increased blood availability was a powerful reminder of the impact we can have through such simple acts of service. It definitely made me more aware of the importance of regular blood donation and motivated me to become a lifelong donor.",
  },
];

function createTestimonialHTML(testimonial) {
  return `
                <div class="item">
                    <div class="tetimonial_info">
                        <div class="t_avatar">
                            <div class="left">
                                <img src="${testimonial.Tavatar}" alt class="mw-100" />
                            </div>
                            <div class="right">
                                <p>${testimonial.Tname}</p>
                                <p>${testimonial.Tdesignation}</p>
                            </div>
                        </div>
                        <p>"${testimonial.Tinfo}"</p>
                    </div>
                </div>
            `;
}

document.addEventListener("DOMContentLoaded", () => {
  const owlCarousel = document.getElementById("owl-demo2");
  Testimonials.forEach((testimonial) => {
    owlCarousel.innerHTML += createTestimonialHTML(testimonial);
  });
  $("#owl-demo2").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 2,
      },
    },
  });
});
