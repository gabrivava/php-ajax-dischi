/* Creo stanza Vue
    al caricamento eseguo una chiamata axios che recupera 10 dischi
    tranformo la risposta da json a array associativo per passare il dato a php e stamparlo
 */

/* const app = new Vue({
    el: '#root',
    data: {
        albums: (''),
        genere: '',
        generi: ['All'],
        selected: null,
    },
    methods: {
        chekGenere(index) {
            if (this.genere === 'All') {
                return true;
            } else if (this.albums[index].genre.includes(this.genere)) {
                return true;
            }
        },
        oderByYearUp(selected) {
            //console.log(selected);

            if (selected === 'from the most recent') {

                this.albums.sort((a, b) => {
                    return b.year - a.year;
                });
                //console.log(this.albums);

            } else if (selected === 'from the least recent') {

                this.albums.sort((a, b) => {
                    return a.year - b.year;
                });

            }

        }
    },
    mounted() {
        axios.get('https://flynn.boolean.careers/exercises/api/array/music').then(risp => {
            const album = risp.data.response;
            //console.log(album);
            this.albums = album;

            /* check generi */ /*
            for (let index = 0; index < this.albums.length; index++) {
                const element = this.albums[index];
                //console.log(element.genre);
                //console.log(element.genre);
                if (!this.generi.includes(element.genre)) {
                    this.generi.push(element.genre)
                } 
            }
            //console.log(this.generi);
        })
    }
}) */
