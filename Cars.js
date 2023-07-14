// Créez un objet pour suivre l'index actuel des voitures dans chaque catégorie
    var carIndex = {
      "SUV": 0,
      "Sport": 0,
      "Convertible": 0,
      "Coupe": 0,
      "Grand Tourer": 0,
      "American": 0
    };

    // Ajoutez les données des voitures pour chaque catégorie
    var carsData = {
      "SUV": {
        "images": ["style/img/SUV1.jpg", "style/img/SUV2.jpg", "style/img/SUV3.jpg"], // Ajoutez les noms des images pour chaque voiture SUV
        "titles": ["SUV1", "SUV2", "SUV3"], // Ajoutez les titres pour chaque voiture SUV
        "descriptions": [
          "Description SUV1",
          "Description SUV2",
          "Description SUV3"
        ], // Ajoutez les descriptions pour chaque voiture SUV
        "prices": ["£10,000", "£15,000", "£20,000"] // Ajoutez les prix pour chaque voiture SUV
      },
      "Sport": {
        "images": ["style/img/Sport1.jpg", "style/img/Sport2.jpg", "style/img/Sport3.jpg"], // Ajoutez les noms des images pour chaque voiture de sport
        "titles": ["Sport1", "Sport2", "Sport3"], // Ajoutez les titres pour chaque voiture de sport
        "descriptions": [
          "Description Sport1",
          "Description Sport2",
          "Description Sport3"
        ], // Ajoutez les descriptions pour chaque voiture de sport
        "prices": ["£20,000", "£25,000", "£30,000"] // Ajoutez les prix pour chaque voiture de sport
      },
      "Convertible": {
        "images": ["style/img/Convertible1.jpg", "style/img/Convertible2.jpg", "style/img/Convertible3.jpg"], // Ajoutez les noms des images pour chaque voiture convertible
        "titles": ["Convertible1", "Convertible2", "Convertible3"], // Ajoutez les titres pour chaque voiture convertible
        "descriptions": [
          "Description Convertible1",
          "Description Convertible2",
          "Description Convertible3"
        ], // Ajoutez les descriptions pour chaque voiture convertible
        "prices": ["£30,000", "£35,000", "£40,000"] // Ajoutez les prix pour chaque voiture convertible
      },
      "Coupe": {
        "images": ["style/img/Coupe1.jpg", "style/img/Coupe2.jpg", "style/img/Coupe3.jpg"], // Ajoutez les noms des images pour chaque voiture coupe
        "titles": ["Coupe1", "Coupe2", "Coupe3"], // Ajoutez les titres pour chaque voiture coupe
        "descriptions": [
          "Description Coupe1",
          "Description Coupe2",
          "Description Coupe3"
        ], // Ajoutez les descriptions pour chaque voiture coupe
        "prices": ["£40,000", "£45,000", "£50,000"] // Ajoutez les prix pour chaque voiture coupe
      },
      "Grand Tourer": {
        "images": ["style/img/GT1.jpg", "style/img/GT2.jpg", "style/img/GT3.jpg"], // Ajoutez les noms des images pour chaque voiture Grand Tourer
        "titles": ["Grand Tourer1", "Grand Tourer2", "Grand Tourer3"], // Ajoutez les titres pour chaque voiture Grand Tourer
        "descriptions": [
          "Description Grand Tourer1",
          "Description Grand Tourer2",
          "Description Grand Tourer3"
        ], // Ajoutez les descriptions pour chaque voiture Grand Tourer
        "prices": ["£60,000", "£65,000", "£70,000"] // Ajoutez les prix pour chaque voiture Grand Tourer
      },
      "American": {
        "images": ["style/img/American1.jpg", "style/img/American2.jpg", "style/img/American3.jpg"], // Ajoutez les noms des images pour chaque voiture américaine
        "titles": ["American1", "American2", "American3"], // Ajoutez les titres pour chaque voiture américaine
        "descriptions": [
          "Description American1",
          "Description American2",
          "Description American3"
        ], // Ajoutez les descriptions pour chaque voiture américaine
        "prices": ["£50,000", "£55,000", "£60,000"] // Ajoutez les prix pour chaque voiture américaine
      },
      // Ajoutez les autres catégories de voitures avec leurs données correspondantes ici
    };

    function changeCar(section) {
      // Augmentez l'index de la voiture dans la catégorie
      carIndex[section]++;
      // Vérifiez si l'index dépasse le nombre total de voitures dans la catégorie
      if (carIndex[section] >= carsData[section].images.length) {
        // Réinitialisez l'index à zéro pour boucler sur les voitures
        carIndex[section] = 0;
      }

      // Obtenez le nouvel index de la voiture dans la catégorie
      var newIndex = carIndex[section];

      // Mettez à jour l'image de la voiture avec le nouvel index
      var imageElement = document.getElementById(section.replace(/\s+/g, '') + 'CarsImage');
      if (imageElement === null) {
        // Si la section est "Grand Tourer" ou "American", mettez à jour l'ID de l'image
        imageElement = document.getElementById(section.replace(/\s+/g, '') + 'CarsImage');
      }
      imageElement.src = carsData[section].images[newIndex];

      // Mettez à jour le titre de la voiture avec le nouvel index
      var titleElement = document.getElementById(section.replace(/\s+/g, '') + 'Title');
      titleElement.textContent = carsData[section].titles[newIndex];

      // Mettez à jour la description de la voiture avec le nouvel index
      var descriptionElement = document.getElementById(section.replace(/\s+/g, '') + 'Description');
      descriptionElement.textContent = carsData[section].descriptions[newIndex];

      // Mettez à jour le prix de la voiture avec le nouvel index
      var priceElement = document.querySelector('.' + section.replace(/\s+/g, '').toLowerCase() + '-card .price');
      priceElement.textContent = carsData[section].prices[newIndex];
    }