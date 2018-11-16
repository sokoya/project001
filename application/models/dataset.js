
let category = [
    {
        "id": "1", "pid": "0", "slug": "mobile-phones"
    },
    {
        "id": "2", "pid": "1", "slug": "no-slug-2"
    },
    {
        "id": "3", "pid": "2",
        "slug": "no-slug-3"
    },
    {
        "id": "4", "pid": "3", "slug": "no-slug-4"
    }, {"id": "5", "pid": "3", "slug": "no-slug-5"}, {
        "id": "6",
        "pid": "3",
        "slug": "no-slug-6"
    },
    {
        "id": "7", "pid": "3", "slug": "no-slug-7"
    }, {"id": "8", "pid": "4", "slug": "no-slug-8"}, {
        "id": "9",
        "pid": "4",
        "slug": "slug2-1"
    }, {"id": "10", "pid": "1", "slug": "slug2-2"}, {"id": "11", "pid": "2", "slug": "slug2-3"}, {
        "id": "12",
        "pid": "2",
        "slug": "slug2-4"
    }, {"id": "13", "pid": "2", "slug": "slug3-1"}, {"id": "14", "pid": "3", "slug": "slug3-2"}, {
        "id": "15",
        "pid": "3",
        "slug": "slug3-6"
    },
    {"id": "16", "pid": "3", "slug": "slug3-7"},
    {"id": "17", "pid": "1", "slug": "slug3-7"},
    {"id": "18", "pid": "17", "slug": "slug3-7"}
];

function get_child(id) {
    let data = [];
    for (i = 0; i < category.length; i++) {
        if (category[i].pid === id) {
            data.push(category[i].id)
        }
    }
    console.log(data);
    data.map(value => {
        for (i = 0; i < category.length; i++) {
            if (category[i].pid === value) {
                get_child(value)
            }
        }
    });

}

console.log(category[1].slug);
get_child('1');
