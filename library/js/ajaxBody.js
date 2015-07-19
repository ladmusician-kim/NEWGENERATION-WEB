function getJson(url, data, success, error) {
    $.ajax({
        url: url,
        type: "POST",
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        data: JSON.stringify(data),
        xhrFields: {
            withCredentials: true
        },
        success: function (data) {
            success(data)
        },
        error: function (arg) {
            if (error) {
               error(arg);
            } else {
                alert("error");
            }
        },
    });
}