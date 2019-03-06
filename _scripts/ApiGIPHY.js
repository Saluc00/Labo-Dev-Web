// Afficher un gif aléatoirement
fetch('https://api.giphy.com/v1/gifs/random?q=saluc&api_key=lW4CBrwCyK6JI801Ceae2j5zxUiyWcw9&limit=1')
    .then(response => response.json())
    .then(result => {
        const salut = 'url(' + result.data.fixed_height_downsampled_url + ')';

        $('#petitmessage').css({
            'background-image': salut
        });

    });