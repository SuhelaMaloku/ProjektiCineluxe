document.addEventListener("DOMContentLoaded", () => {

  const modal = document.getElementById("trailer-modal");
  const iframe = document.getElementById("trailer-video");
  const trailerTitleEl = document.getElementById("trailer-title");
  const trailerDescEl = document.getElementById("trailer-desc");
  const closeBtn = document.getElementById("close-trailer");

  const trailers = {
    "Turning Red": {
      video: "https://www.youtube.com/embed/3JxmmjhuYj0",
      title: "Turning Red Official Trailer",
      desc: "A teenage girl turns into a giant red panda whenever she gets too emotional."
    },
    "The Lion King": {
      video: "https://www.youtube.com/embed/7TavVZMewpY",
      title: "The Lion King Official Trailer",
      desc: "A young lion prince learns the true meaning of courage and responsibility."
    },
    "MULAN": {
      video: "https://www.youtube.com/embed/KK8FHdFluOQ",
      title: "Mulan Official Trailer",
      desc: "A brave young woman disguises herself as a warrior to save her family."
    },
    "Alvin And The Chipmunks": {
      video: "https://www.youtube.com/embed/PzvLj9zC63E",
      title: "Alvin and the Chipmunks Official Trailer",
      desc: "Three musical chipmunks cause chaos while chasing fame and fun."
    },
    "The Grinch": {
      video: "https://www.youtube.com/embed/vjnqABgxfO0",
      title: "The Grinch Official Trailer",
      desc: "A grumpy creature plans to steal Christmas from an unsuspecting town."
    },
    "Trolls": {
      video: "https://www.youtube.com/embed/xyjm5VQ11TQ",
      title: "Trolls Official Trailer",
      desc: "Colorful trolls embark on a joyful adventure to save their friends."
    },
    "Tom And Jerry": {
      video: "https://www.youtube.com/embed/kP9TfCWaQT4",
      title: "Tom And Jerry Official Trailer",
      desc: "A legendary rivalry brings nonstop comedy and chaos."
    },
    "UP": {
      video: "https://www.youtube.com/embed/ORFWdXl_zJ4",
      title: "UP Official Trailer",
      desc: "An old man fulfills his dream by flying his house to South America."
    },
    "Paddington": {
      video: "https://www.youtube.com/embed/W5tUEw4Nq4E",
      title: "Paddington Official Trailer",
      desc: "A kind-hearted bear finds a new home in the city of London."
    },
    "Inside Out": {
      video: "https://www.youtube.com/embed/LEjhY15eCx0",
      title: "Inside Out Official Trailer",
      desc: "The emotions inside a young girl struggle to guide her through change."
    },
    "Ice Age": {
      video: "https://www.youtube.com/embed/QFwJJywzbDs",
      title: "Ice Age Official Trailer",
      desc: "A mismatched group of animals survive a frozen prehistoric world."
    },
    "Coco": {
      video: "https://www.youtube.com/embed/Rvr68u6k5sI",
      title: "Coco Official Trailer",
      desc: "A young boy journeys to the Land of the Dead to discover his heritage."
    },
    "Dumbo": {
      video: "https://www.youtube.com/embed/IBz7FUlZPXI",
      title: "Dumbo Official Trailer",
      desc: "A young elephant discovers his unique ability to fly."
    },
    "Life of Pi": {
      video: "https://www.youtube.com/embed/5GbXVo9DdZo",
      title: "Life of Pi Official Trailer",
      desc: "A boy survives a shipwreck while stranded with a wild tiger."
    },
    "Rapunzel": {
      video: "https://www.youtube.com/embed/ycoY201RTRo",
      title: "Rapunzel Official Trailer",
      desc: "A long-haired princess escapes her tower to discover the world."
    },
    "Luca 3": {
      video: "https://www.youtube.com/embed/3vCLJZs1Ew0",
      title: "Luca 3 Official Trailer",
      desc: "A sea monster experiences unforgettable adventures on land."
    },
    "Rio 2": {
      video: "https://www.youtube.com/embed/xN0thOjjv3k",
      title: "Rio 2 Official Trailer",
      desc: "Blu and his family explore the wilds of the Amazon."
    },
    "Ice Age 2": {
      video: "https://www.youtube.com/embed/Y2q0A7M_vd0",
      title: "Ice Age 2 Official Trailer",
      desc: "The herd races to escape a melting ice world."
    },
    "Moana 2": {
      video: "https://www.youtube.com/embed/7zdS1OCXt0Q",
      title: "Moana 2 Official Trailer",
      desc: "Moana returns for a new journey across dangerous seas."
    },
    "The Lorax": {
      video: "https://www.youtube.com/embed/XW2E2Fne6gY",
      title: "The Lorax Official Trailer",
      desc: "A boy searches for the last tree to save his world."
    },
    "The Snow Queen & The Princess": {
      video: "https://www.youtube.com/embed/7qPQu2Ju9Bk",
      title: "The Snow Queen & The Princess Official Trailer",
      desc: "A magical adventure of friendship and courage."
    },
    "Zootopia 2": {
      video: "https://www.youtube.com/embed/JPk9jA0Wy5A",
      title: "Zootopia 2 Official Trailer",
      desc: "New mysteries challenge the city of animals."
    },
    "A Turtle's Tale": {
      video: "https://www.youtube.com/embed/5kV7Neobf0Y",
      title: "A Turtle's Tale Official Trailer",
      desc: "A young turtle sets out on a life-changing journey."
    },
    "Toy Story 4": {
      video: "https://www.youtube.com/embed/wmiIUN-7qhE",
      title: "Toy Story 4 Official Trailer",
      desc: "Woody and Buzz face new challenges in a changing world."
    },
    "Tangled Ever After": {
      video: "https://www.youtube.com/embed/yA5FsJr0lQA",
      title: "Tangled Ever After Official Trailer",
      desc: "Rapunzel and Flynn prepare for a very special day."
    },

    "Ratatouille": {
      video: "https://www.youtube.com/embed/NgsQ8mVkN8w",
      title: "Ratatouille Official Trailer",
      desc: "A rat dreams of becoming a chef in a famous Paris restaurant."
    },
    "Elemental": {
      video: "https://www.youtube.com/embed/hXzcyx9V0xw",
      title: "Elemental Official Trailer",
      desc: "A story of elemental spirits discovering the balance between fire, water, earth, and air."
    },
    "Wish": {
      video: "https://www.youtube.com/embed/oyRxxpD3yNw",
      title: "Wish Official Trailer",
      desc: "A magical adventure about the power of wishes and dreams."
    },
    "Shaun the Sheep": {
      video: "https://www.youtube.com/embed/t6B7m3y1R-w",
      title: "Shaun the Sheep Official Trailer",
      desc: "A clever sheep leads his flock into hilarious adventures."
    },
    "Shrek": {
      video: "https://www.youtube.com/embed/CwXOrWvPBPk",
      title: "Shrek Official Trailer",
      desc: "An ogre's peaceful life is disrupted when he embarks on a quest to rescue a princess."
    },
    "Frozen": {
      video: "https://www.youtube.com/embed/TbQm5doF_Uc",
      title: "Frozen Official Trailer",
      desc: "A princess sets off on a journey to find her sister, whose icy powers have trapped their kingdom in eternal winter."
    },
    "LUCK": {
      video: "https://www.youtube.com/embed/xSG5UX0EQVg",
      title: "LUCK Official Trailer",
      desc: "A story about finding fortune and friendship in unexpected places."
    },
    "Tangled": {
      video: "https://www.youtube.com/embed/JYKpIr1lSG0",
      title: "Tangled Official Trailer",
      desc: "Rapunzel leaves her tower to explore the world and discover herself."
    },

    "Mowgli": {
      video: "https://www.youtube.com/embed/5mkm22yO-bs",
      title: "Mowgli Official Trailer",
      desc: "A young boy raised by wolves faces challenges in the jungle."
    },
    "Dolittle": {
      video: "https://www.youtube.com/embed/FEf412bSPLs",
      title: "Dolittle Official Trailer",
      desc: "A doctor who can talk to animals embarks on a daring adventure."
    },
    "Belle et Sébastien": {
      video: "https://www.youtube.com/embed/0Z7mZyF2dko",
      title: "Belle et Sébastien Official Trailer",
      desc: "A boy and his dog face incredible adventures in the mountains."
    },
    "how-to-train-your-dragon": {
      video: "https://www.youtube.com/watch?v=qLTDtbYmdWM",
      title: "how-to-train-your-dragon",
      desc: "A young Viking named Hiccup befriends an injured dragon..."
    },
    "The Incredibles": {
      video: "https://www.youtube.com/embed/eZbzbC9285I",
      title: "The Incredibles Official Trailer",
      desc: "A family of superheroes tries to live a normal life while fighting crime."
    },
    "Avatar": {
      video: "https://www.youtube.com/embed/5PSNL1qE6VY",
      title: "Avatar Official Trailer",
      desc: "A paraplegic Marine is sent to Pandora and becomes torn between following orders and protecting an alien civilization."
    },
    "Raya": {
      video: "https://www.youtube.com/embed/1VIZ89FEjYI",
      title: "Raya Official Trailer",
      desc: "A warrior princess sets out to unite her divided kingdom."
    },
    "Alice in Wonderland": {
      video: "https://www.youtube.com/embed/9POCgSRVvf0",
      title: "Alice in Wonderland Official Trailer",
      desc: "Alice falls into a magical world full of strange creatures and adventures."
    },

    "Baby's Day Out": {
      video: "https://www.youtube.com/embed/gY0y2Vq7F2E",
      title: "Baby's Day Out Official Trailer",
      desc: "A baby escapes kidnappers and explores the city in hilarious ways."
    },
    "The Spy Next Door": {
      video: "https://www.youtube.com/embed/7lRz5Z0J4vA",
      title: "The Spy Next Door Official Trailer",
      desc: "A spy must protect his neighbor's children while completing a mission."
    },
    "Mr Bean's Holiday": {
      video: "https://www.youtube.com/embed/hSxLUd8aly4",
      title: "Mr Bean's Holiday Official Trailer",
      desc: "Mr. Bean goes to France and causes chaos everywhere he goes."
    },
    "Spy": {
      video: "https://www.youtube.com/embed/LWkLrR6cKcM",
      title: "Spy Official Trailer",
      desc: "A desk-bound CIA analyst goes undercover to stop a global threat."
    },
    "Rush Hour 3": {
      video: "https://www.youtube.com/embed/WZ5zZ5aH5n8",
      title: "Rush Hour 3 Official Trailer",
      desc: "Detectives Carter and Lee face new adventures in Paris."
    },
    "Alvin and the Chipmunks": {
      video: "https://www.youtube.com/embed/PzvLj9zC63E?si=93GAYqQSq8qkbfbz",
      title: "Alvin and the Chipmunks Official Trailer",
      desc: "The musical chipmunks create chaos while trying to help their friends."
    },
    "Jumanji: The Next Level": {
      video: "https://www.youtube.com/embed/rBxcF-r9Ibs",
      title: "Jumanji: The Next Level Official Trailer",
      desc: "The gang returns to the game, facing new challenges and dangers."
    },

    "The Hobbit": {
      video: "https://www.youtube.com/embed/SDnYMbYB-nU",
      title: "The Hobbit Official Trailer",
      desc: "Bilbo Baggins joins dwarves on a quest to reclaim their homeland from a dragon."
    },
    "VENOM": {
      video: "https://www.youtube.com/embed/u9Mv98Gr5pY",
      title: "VENOM Official Trailer",
      desc: "A journalist bonds with an alien symbiote, gaining superpowers."
    },
    "The Last Airbender": {
      video: "https://www.youtube.com/embed/uwK1z3z0Zvc",
      title: "The Last Airbender Official Trailer",
      desc: "A young boy with the power to control elements tries to bring peace to the world."
    },
    "Mulan": {
      video: "https://www.youtube.com/embed/KK8FHdFluOQ",
      title: "Mulan Official Trailer",
      desc: "A brave young woman disguises herself as a warrior to save her family."
    },
    "Maleficent": {
      video: "https://www.youtube.com/embed/n0OFH4xpPr4",
      title: "Maleficent Official Trailer",
      desc: "The untold story of the iconic villain from Sleeping Beauty."
    },
    "Beauty and the Beast": {
      video: "https://www.youtube.com/embed/e3Nl_TCQXuw",
      title: "Beauty and the Beast Official Trailer",
      desc: "A young woman discovers the heart of a cursed prince."
    },
    "Aladdin": {
      video: "https://www.youtube.com/embed/foyufD52aog",
      title: "Aladdin Official Trailer",
      desc: "A street-smart young man discovers a magical lamp and a genie."
    },
    "Miss Peregrine's Home for Peculiar Children": {
      video: "https://www.youtube.com/embed/tV_IhWE4LP0",
      title: "Miss Peregrine's Home Official Trailer",
      desc: "A boy discovers a hidden orphanage for children with extraordinary abilities."
    },

    "Bad Boys for Life": {
      video: "https://www.youtube.com/embed/jKCj3XuPG8M",
      title: "Bad Boys for Life Official Trailer",
      desc: "Detectives face new challenges and enemies while saving Miami."
    },
    "Fast and Furious": {
      video: "https://www.youtube.com/embed/2TAOizOnNPo",
      title: "Fast & Furious Official Trailer",
      desc: "Street racers go undercover to take down a criminal mastermind."
    },
    "Forbidden Kingdom": {
      video: "https://www.youtube.com/embed/btD7kEJpZ0k",
      title: "Forbidden Kingdom Official Trailer",
      desc: "A teenager is transported to ancient China and joins a fight to save the kingdom."
    },
    "Taken": {
      video: "https://www.youtube.com/embed/uPJVJBm9TPA",
      title: "Taken Official Trailer",
      desc: "A retired agent must rescue his kidnapped daughter."
    },
    "Alpha": {
      video: "https://www.youtube.com/embed/uIxnTi4GmCo",
      title: "Alpha Official Trailer",
      desc: "A young hunter befriends a wolf during prehistoric times."
    },
    "The Karate Kid": {
      video: "https://www.youtube.com/embed/r_8Rw16uscg",
      title: "The Karate Kid Official Trailer",
      desc: "A boy learns karate to defend himself and gain confidence."
    },
    "Wonder Woman": {
      video: "https://www.youtube.com/embed/1Q8fG0TtVAY",
      title: "Wonder Woman Official Trailer",
      desc: "A warrior princess leaves her island to fight for justice in the world of man."
    },
    "Extraction": {
      video: "https://www.youtube.com/embed/L6P3nI6VnlY",
      title: "Extraction Official Trailer",
      desc: "A black ops mercenary embarks on a mission to save a kidnapped boy."
    }
  };
  document.querySelectorAll(".box").forEach(box => {
    box.addEventListener("click", () => {
      const titleEl = box.querySelector("h3");
      if (!titleEl) return;

      const title = titleEl.innerText.trim();
      const trailer = trailers[title];

      if (trailer) {
        iframe.src = trailer.video;
        trailerTitleEl.innerText = trailer.title || title;
        trailerDescEl.innerText = trailer.desc || "";
        modal.style.display = "flex";
      }
    });
  });
  document.querySelectorAll(".btn[data-trailer]").forEach(btn => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      const trailerUrl = btn.dataset.trailer.replace("watch?v=", "embed/") + "?autoplay=1";
      iframe.src = trailerUrl;
      trailerTitleEl.innerText = btn.dataset.title || "Official Trailer";
      trailerDescEl.innerText = btn.dataset.desc || "";
      modal.style.display = "flex";
    });
  });
  document.querySelectorAll(".play i").forEach(playBtn => {
    playBtn.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();

      const homeText = playBtn.closest('.container')?.querySelector('.home-text h1');
      if (homeText) {
        const title = homeText.innerText.trim();
        const trailer = trailers[title];
        
        if (trailer) {
          iframe.src = trailer.video;
          trailerTitleEl.innerText = trailer.title || title;
          trailerDescEl.innerText = trailer.desc || "";
          modal.style.display = "flex";
        }
      }
    });
  });
  closeBtn.addEventListener("click", () => {
    iframe.src = "";
    trailerTitleEl.innerText = "";
    trailerDescEl.innerText = "";
    modal.style.display = "none";
  });
  window.openTrailer = function(videoUrl, title, desc) {
    iframe.src = videoUrl;
    trailerTitleEl.innerText = title;
    trailerDescEl.innerText = desc;
    modal.style.display = "flex";
  };
});