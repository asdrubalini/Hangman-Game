$(".selector").click((e) => {
    const sort = e.target.id;
    
    var searchParams = new URLSearchParams(window.location.search);
    searchParams.set("sort", sort);
    window.location.search = searchParams.toString();
})
