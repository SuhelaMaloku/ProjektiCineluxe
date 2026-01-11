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