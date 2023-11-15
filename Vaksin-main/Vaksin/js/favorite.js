function showALLFavorite() {
    $.getJSON('../data/favorite.json', function (data) {
  
      let favorite = data.favorite;
  
      $.each(favorite, function (i, data) {
        $('#list-favorite').append('<div class="col-md-3"><div class="gallery-single fix"><img src="../image/favorite/' + data.img + '" class="img-fluid" alt="Image"><div class="why-text"><h4>' + data.Nama + '</h4><p>' + data.description + '</p><div class="text-center"><a href="../Home' + data.link + '" class="btn btn-warning btn-sm text-white">See Recipe</a></div></div></div></div>');
      });
    });
  }
  
  showALLFavorite();