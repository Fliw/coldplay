'use strict';

(function ($) {
  var songs = [
    {
      title: "My Universe",
      artist_name: "Music of the Spheres",
      mp3: "https://www.morexlusive.com/wp-content/uploads/2021/11/Coldplay_BTS_-_My_Universe.mp3",
      thumb: "theme/hnband/img/track-thumbs/3.jpg",
      length: 2021,
      platform_url: {
        amazon: "#",
        spotify: "#",
        itunes: "#",
        soundcloud: "#"
      }
    },{
    title: "Fix You",
    artist_name: "X&Y",
    mp3: "https://hitzop.com/wp-content/uploads/2021/06/Coldplay_-_Fix_You.mp3",
    thumb: "theme/hnband/img/track-thumbs/1.jpg",
    length: 2005,
    platform_url: {
      amazon: "#",
      spotify: "#",
      itunes: "#",
      soundcloud: "#"
    }
  }, {
    title: "The Scientist",
    artist_name: "A Rush of Blood to the Head",
    mp3: "https://hitzop.com/wp-content/uploads/2021/05/Coldplay_-_The_Scientist.mp3",
    thumb: "theme/hnband/img/track-thumbs/2.jpg",
    length: 2002,
    platform_url: {
      amazon: "#",
      spotify: "#",
      itunes: "#",
      soundcloud: "#"
    }
  }, {
    title: "Hymn for the Weekend",
    artist_name: "A Head Full of Dreams",
    mp3: "https://aimglostore.com/wp-content/uploads/2021/11/Coldplay_-_Hymn_For_The_Weekend_neolifeupdates.com.mp3",
    thumb: "theme/hnband/img/track-thumbs/4.jpg",
    length: 2015,
    platform_url: {
      amazon: "#",
      spotify: "#",
      itunes: "#",
      soundcloud: "#"
    }
  }, {
    title: "Yellow",
    artist_name: "Yellow",
    mp3: "https://hitzop.com/wp-content/uploads/2021/03/Coldplay_-_Yellow.mp3",
    thumb: "theme/hnband/img/track-thumbs/5.jfif",
    length: 2000,
    platform_url: {
      amazon: "#",
      spotify: "#",
      itunes: "#",
      soundcloud: "#"
    }
  }, {
    title: "In My Place",
    artist_name: "A Rush of Blood to the Head",
    mp3: "https://y2tube.net/download/gnIZ7RMuLpU/mp3/128/1641331931/37b56f92499fba9ab2f727b10ec72da54ab96d2373948c6576567411f93ee167/0",
    thumb: "theme/hnband/img/track-thumbs/6.jpg",
    length: 2002,
    platform_url: {
      amazon: "#",
      spotify: "#",
      itunes: "#",
      soundcloud: "#"
    }
  }, {
    title: "Everglow",
    artist_name: "A Head Full of Dreams",
    mp3: "https://y2tube.net/download/xn_1hFdE-5g/mp3/128/1641332081/cf3a2485a4cc4c555ea3ba772d8c2d0325a4a0f0e4429b9495be9a17f707f254/0",
    thumb: "theme/hnband/img/track-thumbs/7.jpg",
    length: 2016,
    platform_url: {
      amazon: "#",
      spotify: "#",
      itunes: "#",
      soundcloud: "#"
    }
  }];
  var songs_list = [];
  songs.forEach(function (el, key) {
    songs_list.push({
      mp3: el.mp3,
      title: el.title
    });
  });
  new jPlayerPlaylist({
    jPlayer: "#jquery_jplayer_2",
    cssSelectorAncestor: "#jp_container_2"
  }, songs_list, {
    swfPath: "./",
    supplied: "oga, mp3",
    wmode: "window",
    useStateClassSkin: true,
    autoBlur: false,
    smoothPlayBar: true,
    keyEnabled: true,
    loadeddata: function loadeddata() {
      $('.player_social').remove();
      $('.track-info').text(" ");
      var playlist = document.querySelectorAll('.audio-playlist > ul > li');
      playlist.forEach(function (el, key) {
        var markup_1 = "\n\t\t\t\t<div class=\"list-left\" data-songthumb=\"" + songs[key].thumb + "\">\n\t\t\t\t\t<h6>" + songs[key].title + "</h6>\n\t\t\t\t\t<p>" + songs[key].artist_name + "</p>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"player_social\">\n\t\t\t\t\t<a href=\"" + songs[key].platform_url.amazon + "\"><i class=\"fa fa-amazon\"></i></a>\n\t\t\t\t\t<a href=\"" + songs[key].platform_url.spotify + "\"><i class=\"fa fa-spotify\"></i></a>\n\t\t\t\t\t<a href=\"" + songs[key].platform_url.itunes + "\"><i class=\"fa fa-apple\"></i></a>\n\t\t\t\t\t<a href=\"" + songs[key].platform_url.soundcloud + "\"><i class=\"fa fa-soundcloud\"></i></a>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"list-right\">\n\t\t\t\t\t<h6>" + songs[key].length + "</h6>\n\t\t\t\t</div>";
        el.childNodes[0].childNodes[1].innerHTML = "";
        el.childNodes[0].childNodes[1].innerHTML += markup_1;
      });
      $(".audio-playlist > ul > li ").each(function (e) {
        $(this).find('.player_social').appendTo($(this));
      });
      $(".audio-playlist .jp-playlist-item.jp-playlist-current .list-left").children().clone().appendTo('.track-info');
      var currentThumb = $('.jp-playlist-current .list-left').data('songthumb');
      $('#player__thumb').css('background-image', 'url(' + currentThumb + ')');
    }
  });
})(jQuery);