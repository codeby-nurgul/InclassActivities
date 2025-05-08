$(document).ready(function () {
    $("#nav_list a").click(function (e) {
      e.preventDefault(); 
  
      const speaker = $(this).attr("title");
      const filename = `json_files/${speaker}.json`;
  
      $.getJSON(filename, function (data) {
        const speakerData = data.speakers[0];
  
        const html = `
          <h1>${speakerData.title}</h1>
          <img src="${speakerData.image}" alt="${speakerData.speaker}">
          <h2>${speakerData.month}<br>${speakerData.speaker}</h2>
          <p>${speakerData.text}</p>
        `;
  
        $("main").html(html); 
      }).fail(function () {
        alert("Error while loading data");
      });
    });
  });
  