document.addEventListener("DOMContentLoaded", () => {
  // ===== HAMBURGER MENU TOGGLE =====
  const hamburgerBtn = document.getElementById("hamburger-btn");
  const navMenu = document.getElementById("nav-menu");

  if (hamburgerBtn && navMenu) {
    hamburgerBtn.addEventListener("click", () => {
      // Toggle active class on button (for X animation)
      hamburgerBtn.classList.toggle("active");
      
      // Toggle nav open class
      navMenu.classList.toggle("nav-open");
      
      // Update aria-expanded for accessibility
      const isOpen = navMenu.classList.contains("nav-open");
      hamburgerBtn.setAttribute("aria-expanded", isOpen);
    });

    // Close menu when clicking a nav link
    navMenu.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => {
        hamburgerBtn.classList.remove("active");
        navMenu.classList.remove("nav-open");
        hamburgerBtn.setAttribute("aria-expanded", "false");
      });
    });

    // Close menu when clicking outside
    document.addEventListener("click", (e) => {
      if (!hamburgerBtn.contains(e.target) && !navMenu.contains(e.target)) {
        hamburgerBtn.classList.remove("active");
        navMenu.classList.remove("nav-open");
        hamburgerBtn.setAttribute("aria-expanded", "false");
      }
    });

    // Close menu on escape key
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && navMenu.classList.contains("nav-open")) {
        hamburgerBtn.classList.remove("active");
        navMenu.classList.remove("nav-open");
        hamburgerBtn.setAttribute("aria-expanded", "false");
      }
    });
  }

  
  // Smooth scroll for nav links
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener("click", e => {
      const targetId = link.getAttribute("href").slice(1);
      const target = document.getElementById(targetId);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth" });
      }
    });
  });

  // Fade-in sections on scroll
  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("section-visible");
        }
      });
    },
    { threshold: 0.15 }
  );

  const taglineEl = document.getElementById("hero-tagline-text");
  if (!taglineEl) return;

  const phrases = [
    "Tax Trends Today",
    "Global Tax Insights",
    "Strategic Tax Planning",
    "International Perspectives"
  ];

  let index = 0;

  // helper to show a phrase with fade animation
  const showPhrase = (text) => {
    taglineEl.classList.remove("hero-tagline-fade-out");
    taglineEl.classList.add("hero-tagline-fade-in");
    taglineEl.textContent = text;
  };

  // initial state
  showPhrase(phrases[index]);

  setInterval(() => {
    // fade out current text
    taglineEl.classList.remove("hero-tagline-fade-in");
    taglineEl.classList.add("hero-tagline-fade-out");

    // after fade-out, change the text and fade back in
    setTimeout(() => {
      index = (index + 1) % phrases.length;
      showPhrase(phrases[index]);
    }, 400); // must match CSS transition duration
  }, 3200);
 
  const options = { threshold: 0.3 };

   // ABOUT section scroll animation
  const aboutSection = document.querySelector(".section-about");

  if (aboutSection) {
    const aboutObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // section enters viewport
            aboutSection.classList.add("about-in-view");
          } else {
            // section leaves viewport -> allow fade-out again
            aboutSection.classList.remove("about-in-view");
          }
        });
      },
      {
        threshold: 0.35,      // ~35% of section must be visible
      }
    );

    aboutObserver.observe(aboutSection);
  }
  
  document.querySelectorAll(".section").forEach(sec => {
    sec.classList.add("section-hidden");
    observer.observe(sec);
  });
});
