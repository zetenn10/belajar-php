

document.addEventListener('DOMContentLoaded', function() {
    let endpoint = 'https://api.jikan.moe/v4/top/anime';

    let konten = document.getElementById('konten');

    // Munculkan pesan loading
    konten.innerHTML = 'Loading...';

    fetch(endpoint)
        .then((res) => res.json())
        .then((response) => {
            // Hapus pesan loading
            konten.innerHTML = '';

            response.data.forEach(anime => {
                let elemen = document.createElement('div');
                elemen.innerHTML = `
                    <div class="card">
                        <div class="card-header text-muted border-bottom-0">
                            <img src="${anime.images.webp.image_url}" alt="${anime.title}" class="card-img-top">
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="overflow-hidden" style="height: 200 px;>
                                    <h1 class="card-title">Title: ${anime.title}</h1>
                                    <p class="card-text">Score: ${anime.score}</p>
                                    <p class="card-text">Status: ${anime.status}</p>
                                    <p class="card-text">Episodes: ${anime.episodes}</p>
                                    <p class="card-text">Duration: ${anime.duration}</p>
                                    <p class="card-text">Studio: ${anime.studios[0].name}</p>
                                    <p class="card-text">Genres: ${anime.genres.map(genre => genre.name).join(', ')}</p> 
                                    <p class="text-muted">${anime.synopsis}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-search fa-fw"></i> View More
                                </a>
                            </div>
                        </div>
                    </div>
                `;
                konten.appendChild(elemen);
            });
        })
        .catch((error) => {
            // Tampilkan pesan jika terjadi kesalahan
            konten.innerHTML = 'Error fetching data: ' + error.message;
        });
});
