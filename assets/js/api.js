function getUrl() {
    var url = document.getElementById("urlInput").value;

    fetch("https://whatcms.org/APIEndpoint/Detect?key=3270ef043ff53e86c3f7123ab4d2b9177d0bbe2d80a485167db6a1f4a1bbeab581efab&url=" + url)
        .then(response => response.jsonp())
        .then(jsonp => {
            if (jsonp.result.code === 200) {
                console.log(jsonp);
            } else {
                console.log(jsonp);
            }
        });
}