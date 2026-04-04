import { createApp } from 'vue';

const API_BASE = 'http://localhost:8000/api';

function handleResponse(response)
 {
    if (!response.ok) {
        throw new Error('Bad API response: ' + response.status);
    }
    return response.json();
 }

function animateCards() 
{
    gsap.from('.game-card', {
        duration: 0.4,
        y: 20,
        opacity: 0,
        stagger: 0.04,
        ease: 'power2.out'
    });
}

function animateDetail(detailEl) 
{
    gsap.from(detailEl, {
        duration: 0.35,
        x: 24,
        opacity: 0,
        ease: 'power2.out'
    });
}
const GAME_IMAGES = 
{
    'Devil May Cry 5': 'images/devil-may-cry-5.png',
    'Sekiro: Shadows Die Twice': 'images/sekiro-shadows-die-twice.jpg',
    'Doom Eternal': 'images/doom-eternal.png',
    'Elden Ring': 'images/elden-ring.png',
    'The Witcher 3: Wild Hunt': 'images/the-witcher-3-wild-hunt.png',
    'Persona 5 Royal': 'images/persona-5-royal.png',
    'The Last of Us Part II':'images/the-last-of-us-part-ii.png',
    'Red Dead Redemption 2': 'images/red-dead-redemption-2.png',
    "Uncharted 4: A Thief's End": 'images/uncharted-4-a-thiefs-end.png',
    'FIFA 23': 'images/fifa-23.png',
    'NBA 2K23': 'images/nba-2k23.png',
    'Stardew Valley': 'images/stardew-valley.png',
    'Cities: Skylines': 'images/cities-skylines.png',
    'Resident Evil Village': 'images/resident-evil-village.png',
    'Silent Hill 2': 'images/silent-hill-2.png',
    'Civilization VI': 'images/civilization-vi.png',
    'XCOM 2': 'images/xcom-2.png',
    'Portal 2': 'images/portal-2.png',
    'Tetris Effect': 'images/tetris-effect.png',
    'The Witness': 'images/the-witness.png'
};

export function games()
 {
    createApp({
        data() 
        {
            return {
                games:[],
                genres:[],
                selectedGame: null,
                searchQuery: '',
                selectedGenreId: '',
                loading: false,
                error: null,
                detailLoading: false,
                detailError: null
            };
        },

        mounted() 
        {
            gsap.from('#main-nav',{ duration: 0.6, y: -30, opacity: 0, ease: 'power2.out' });
            gsap.from('#app-header',{ duration: 0.8, y: -40, opacity: 0, delay: 0.2, ease: 'power2.out' });
            gsap.from('#controls-bar',{ duration: 0.8, y: -20, opacity: 0, delay: 0.4, ease: 'power2.out' });

        
            const headerTitle = document.querySelector('#header-title');
            headerTitle.addEventListener('click', this.resetView);

            this.fetchGenres();
            this.fetchGames();
        },

        methods: 
        {

            resetView() {
                this.selectedGame    = null;
                this.detailError     = null;
                this.searchQuery     = '';
                this.selectedGenreId = '';
                this.fetchGames();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            },

            fetchGames() 
            {
                this.loading = true;
                this.error = null;

                let url = API_BASE + '/video-games';
                const params = [];

                if (this.searchQuery) {
                    params.push('search=' + encodeURIComponent(this.searchQuery));
                }
                if (this.selectedGenreId) {
                    params.push('genre_id=' + this.selectedGenreId);
                }
                if (params.length > 0) {
                    url = url + '?' + params.join('&');
                }

                fetch(url)
                    .then(handleResponse)
                    .then(data => {
                        this.games = data.data;
                        this.$nextTick(animateCards);
                    })
                    .catch(err => {
                        this.error = 'COULD NOT REACH API — IS LARAVEL RUNNING?';
                    })
                    .finally(() => {
                        this.loading = false;
                    });
            },

            fetchGenres() 
            {
                fetch(API_BASE + '/genres')
                    .then(handleResponse)
                    .then(data => {
                        this.genres = data.data;
                    })
                    .catch(err => {
                        console.error('Genre load failed:', err);
                    });
            },

            selectGame(id) 
            {
                this.detailLoading = true;
                this.detailError = null;
                this.selectedGame = null;

                fetch(API_BASE + '/video-games/' + id)
                    .then(handleResponse)
                    .then(data => {
                        this.selectedGame = data.data;
                        this.$nextTick(() => {
                            animateDetail(this.$refs.detailPanel);
                        });
                    })
                    .catch(err => {
                        this.detailError = 'FAILED TO LOAD GAME DETAILS';
                    })
                    .finally(() => {
                        this.detailLoading = false;
                    });
            },

            closeDetail() 
            {
                this.selectedGame = null;
                this.detailError = null;
            },
            getGameImage(title) 
            {
                if (GAME_IMAGES[title]) 
                {
                    return GAME_IMAGES[title];
                }
                return null;
            }
             
        }

    }).mount('#app');
}