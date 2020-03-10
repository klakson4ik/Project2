if(window.location == '/') {
   window.onload = function () {
      let images = document.querySelector('.slayderimg>img');
      let arrimages = getImages();
      let count = 1;
      setInterval(() => {
         if (count == 5)
            count = 0;
         ++count;
         images.src = arrimages[count];
      }, 3000);

      function getImages() {
         let array = [];
         for (var i = 0; i < 6; i++) {
            img = `../public/images/Slayder/${i}.jpg`
            array.push(img);
         }
         return array;
      }
   }
}