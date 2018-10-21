const ID = '29f85405';
const KEY = '1a0f0e1b4a9d5d7854dfea3d1067a077';

let breakfastMeals = [];
let lunchMeals = [];
let dinnerMeals = [];

function SendMealToServer(mealId, type)
{
    let query = './brainmush/populateMeals.php?mealid=' +
                mealId + '&type=' + type;

    var xhr = createCORSRequest('POST', query);
    if (!xhr)
    {
        alert('CORS not supported');
        return;
    }

    // Response handlers.
    xhr.onload = function()
    {

    };

    xhr.onerror = function()
    {
        console.log('Woops, there was an error making the request.');
    };
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send();
}

function GetMealFromServer()
{
    let query = '';

    var xhr = createCORSRequest('POST', query);

    if (!xhr)
    {
        alert('CORS not supported');
        return;
    }

    // Response handlers.
    xhr.onload = function()
    {

    };

    xhr.onerror = function()
    {
        console.log('Woops, there was an error making the request.');
    };
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send();
}

function GetRecipeFromId(mealId)
{
    let query = 'https://api.edamam.com/search?' +
                'r=http%3A%2F%2Fwww.edamam.com%2Fontologies%2Fedamam.owl%23recipe_' +
                mealId +
                '&app_id=' + ID +
                '&app_key=' + KEY;

    var xhr = createCORSRequest('GET', query);
    if (!xhr)
    {
        alert('CORS not supported');
        return;
    }

    // Response handlers.
    xhr.onload = function()
    {

        // Parse json string to object
        let response = JSON.parse(xhr.responseText);

        return response;
    };

    xhr.onerror = function()
    {
        console.log('Woops, there was an error making the request.');
    };

    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send();
}

function GetAttributesFromNum(num)
{
    let mealType;
    let mealArr;

    switch(num)
    {
        case 0:
            mealType = 'breakfast';
            mealArr = breakfastMeals;
            break;
        case 1:
            mealType = 'lunch';
            mealArr = lunchMeals;
            break;
        case 2:
            mealType = 'dinner';
            mealArr = dinnerMeals;
            break;
    }

    return [mealType, mealArr];
}

function GenerateMeals()
{
    //console.log("Generating meals...");
    for (let i=0; i<3; i++)
    {
        let arrayFromNum = GetAttributesFromNum(i);

        makeCORSRequest(arrayFromNum[0], arrayFromNum[1]);
    }

    for (let i=0; i<3; i++)
    {
        let arrayFromNum = GetAttributesFromNum(i);

        for (let j=0; j<7; j++)
            SendMealToServer(arrayFromNum[1][j], arrayFromNum[0]);
    }

}

function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

function GetRecipeId(str)
{
    let recipeId;
    let splitStr = str.split("http://www.edamam.com/ontologies/edamam.owl#recipe_");
    recipeId = splitStr[1];


    return recipeId;
}

// Create the XHR object.
function createCORSRequest(method, url) 
{
    var xhr = new XMLHttpRequest();
    if ("withCredentials" in xhr)
    {
        // XHR for Chrome/Firefox/Opera/Safari.
        xhr.open(method, url, false);
    }
    else if (typeof XDomainRequest != "undefined")
    {
        // XDomainRequest for IE.
        xhr = new XDomainRequest();
        xhr.open(method, url);
    }
    else
    {
        // CORS not supported.
        xhr = null;
    }
    return xhr;
}

// Make the actual CORS request.
function makeCORSRequest(mealType, mealArr)
{
    let query = 'https://api.edamam.com/search?q=' +
                mealType +
                '&app_id=' + ID +
                '&app_key=' + KEY +
                '&from=0&to=10';

    var xhr = createCORSRequest('GET', query);
    if (!xhr)
    {
        alert('CORS not supported');
        return;
    }

    // Response handlers.
    xhr.onload = function()
    {

        // Parse json string to object
        let response = JSON.parse(xhr.responseText);

        let arr = response.hits;
        arr = shuffle(arr);

        for (let i = 0; i<7; i++) {

            mealArr.push(GetRecipeId(arr[i].recipe.uri));
        }
    };

    xhr.onerror = function()
    {
        console.log('Woops, there was an error making the request.');
    };
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send();
}