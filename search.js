console.log('search.js loaded');

const movies = [
    { title: "Turning Red", poster: "download (35)-Picsart-AiImageEnhancer.jpg" },
    { title: "The Lion King", poster: "lion 21.jpg" },
    { title: "Mulan", poster: "download (50).jpg" },
    { title: "Alvin And The Chipmunks", poster: "Alvin And the Chipmunks.jpg" },
    { title: "The Grinch", poster: "download (5).jpg" },
    { title: "Trolls", poster: "download (9).jpg" },
    { title: "Tom And Jerry", poster: "tom and jerry movie.jpg" },
    { title: "UP", poster: "Up_ Love love love this movie.jpg" },
    { title: "Paddington", poster: "download (10).jpg" },
    { title: "Inside Out", poster: "insideout.jpg" },
    { title: "Ice Age", poster: "Ice Age.jpg" },
    { title: "Coco", poster: "download (6).jpg" },
    { title: "Dumbo", poster: "download (20).jpg" },
    { title: "Life of Pi", poster: "download (39).jpg" },
    { title: "Rapunzel", poster: "Walt Disney's Tangled movie poster US $11_99.jpg" },
    { title: "Ratatouille", poster: "Ratatouille 2007.jpg" },
    { title: "Elemental", poster: "DISNEY ELEMENTAL MOVIE POSTER.jpg" },
    { title: "Wish", poster: "WISH DRAGON Parents Guide + Movie Review.jpg" },
    { title: "Shaun the Sheep", poster: "Shaun the Sheep 2007 ‧ Animation ‧ 5 seasons.jpg" },
    { title: "Shrek", poster: "Sherek_.jpg" },
    { title: "Frozen", poster: "download (38).jpg" },
    { title: "LUCK", poster: "Apple TV+ LUCK Parents Guide + Movie Review.jpg" },
    { title: "Tangled", poster: "Walt Disney's Tangled movie poster US $11_99.jpg" },
    { title: "Mowgli", poster: "Mowgli_ Legend of the Jungle_ 2_6.jpg" },
    { title: "Dolittle", poster: "Dolittle - 2020.jpg" },
    { title: "Belle et Sébastien", poster: "Belle et Sébastien de Nicolas Vanier_ Film….jpg" },
    { title: "How to Train Your Dragon", poster: "Dragon.jpg" },
    { title: "The Incredibles", poster: "_THE INCREDIBLES, 2004.jpg" },
    { title: "Avatar", poster: "Movies.jpg" },
    { title: "Raya", poster: "Raya From Disney Movie.jpg" },
    { title: "Alice in Wonderland", poster: "Alice in Wonderland.jpg" },
    { title: "Baby's Day Out", poster: "Baby's Day Out (1994).jpg" },
    { title: "The Spy Next Door", poster: "download (42).jpg" },
    { title: "Mr Bean's Holiday", poster: "MR_ BEAN'S HOLIDAY - 2007 MOVIE POSTER ORIGINAL.jpg" },
    { title: "Spy", poster: "Spy (2015) Rating 7_10.jpg" },
    { title: "Rush Hour 3", poster: "Rush Hour 3.jpg" },
    { title: "Alvin and the Chipmunks", poster: "Movie Poster.jpg" },
    { title: "Jumanji: The Next Level", poster: "New official poster for JUMANJI_ THE NEXT LEVEL_.jpg" },
    { title: "The Hobbit", poster: "The Hobbit, an Unexpected Journey - Cross Stitch Pattern, Pdf Format, Delivered by Email, Movies Cross Stitch - Etsy.jpg" },
    { title: "VENOM", poster: "Marvel VENOM 11_ x 17_ Collector's Movie Poster ( T6 ) _ eBay.jpg" },
    { title: "The Last Airbender", poster: "Masonic pillars (red & blue_sun and moon).jpg" },
    { title: "Maleficent", poster: "Maleficent  is a 2014 American dark fantasy film….jpg" },
    { title: "Beauty and the Beast", poster: "download (43).jpg" },
    { title: "Aladdin", poster: "Aladdin (2019).jpg" },
    { title: "Miss Peregrine's Home for Peculiar Children", poster: "Naar het boek De bijzondere kinderen van mevrouw….jpg" },
    { title: "Bad Boys for Life", poster: "2 (2).jpg" },
    { title: "Fast and Furious", poster: "2 (6).jpg" },
    { title: "Forbidden Kingdom", poster: "2 (4).jpg" },
    { title: "Taken", poster: "2 (3).jpg" },
    { title: "Alpha", poster: "movie.jpg" },
    { title: "The Karate Kid", poster: "2 (5).jpg" },
    { title: "Wonder Woman", poster: "WONDER WOMAN starring Gal Gadot _ In theaters June 2, 2017.jpg" },
    { title: "Extraction", poster: "download (46).jpg" }
];
function initSearch() {
    const searchInput = document.getElementById("search-input");
    const resultsContainer = document.getElementById("search-results-container");
    
    console.log('Search elements:', {
        input: searchInput,
        container: resultsContainer
    });
    
    if (!searchInput || !resultsContainer) {
        console.error('Search elements not found!');
        return;
    }
    
    searchInput.addEventListener("input", function() {
        const query = this.value.trim().toLowerCase();
        resultsContainer.innerHTML = "";
        
        if (!query) {
            resultsContainer.style.display = "none";
            return;
        }
        
        const filtered = movies.filter(movie => 
            movie.title.toLowerCase().includes(query)
        );
        
        if (filtered.length === 0) {
            resultsContainer.innerHTML = `
                <div class="search-result" style="padding: 10px; text-align: center;">
                    No movies found
                </div>
            `;
            resultsContainer.style.display = "block";
            return;
        }
        
        filtered.forEach(movie => {
            const div = document.createElement("div");
            div.className = "search-result";
            div.innerHTML = `
                <img src="${movie.poster}" alt="${movie.title}" 
                     style="width: 40px; height: 50px; object-fit: cover; border-radius: 4px;">
                <span style="color: white; font-size: 14px;">${movie.title}</span>
            `;
            div.style.cssText = `
                display: flex;
                align-items: center;
                gap: 10px;
                padding: 8px 12px;
                cursor: pointer;
                transition: background 0.3s;
            `;
            div.addEventListener("mouseenter", () => {
                div.style.background = "rgba(255, 255, 255, 0.1)";
            });
            div.addEventListener("mouseleave", () => {
                div.style.background = "transparent";
            });
            div.addEventListener("click", () => {
                alert(`You selected: ${movie.title}`);
                searchInput.value = movie.title;
                resultsContainer.style.display = "none";
            });
            resultsContainer.appendChild(div);
        });
        
        resultsContainer.style.display = "block";
    });
    document.addEventListener("click", function(event) {
        if (!searchInput.contains(event.target) && !resultsContainer.contains(event.target)) {
            resultsContainer.style.display = "none";
        }
    });
}
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSearch);
} else {
    initSearch();
}


