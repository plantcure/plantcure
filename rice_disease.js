$("#image-selector").change(function () {
    let reader = new FileReader();
    reader.onload = function () {
        let dataURL = reader.result;
        $("#selected-image").attr("src", dataURL);
        $("#prediction-list").empty();
    }
    let file = $("#image-selector").prop("files")[0];
    reader.readAsDataURL(file);
}); 
let model;
let modelName;
async function rice_model(){
    modelName=undefined;
    modelName='rice';
    console.log("here");
    $(".progress-bar").show();
    console.log("in");
    model=undefined;
    model = await tf.loadLayersModel("https://github.com/plantcure/plantcure/web_deployement/static/web_models/rice_leaf/model.json");
    $(".progress-bar").hide();

}
async function potato_model(){
    modelName=undefined;
    modelName='potato';
    $(".progress-bar").show();
    model=undefined;
    model = await tf.loadLayersModel("http://localhost/web_deployement/static/web_models/potato_model/model.json");
    $(".progress-bar").hide();

}
async function tomato_model(){
    modelName=undefined;
    modelName='tomato';
    $(".progress-bar").show();
    model=undefined;
    model = await tf.loadLayersModel("http://localhost/web_deployement/static/web_models/tomato_model/model.json");
    $(".progress-bar").hide();

}
async function grape_model(){
    modelName=undefined;
    modelName='grape';
    $(".progress-bar").show();
    model=undefined;
    model = await tf.loadLayersModel("http://localhost/web_deployement/static/web_models/grape_model/model.json");
    $(".progress-bar").hide();

}
async function apple_model(){
    modelName=undefined;
    modelName='apple';
    $(".progress-bar").show();
    model=undefined;
    model = await tf.loadLayersModel("http://localhost/web_deployement/static/web_models/apple_model/model.json");
    $(".progress-bar").hide();

}
async function peach_model(){
    modelName=undefined;
    modelName='peach';
    $(".progress-bar").show();
    model=undefined;
    model = await tf.loadLayersModel("http://localhost/web_deployement/static/web_models/peach_model/model.json");
    $(".progress-bar").hide();

}
async function strawberry_model(){
    modelName=undefined;
    modelName='strawberry';
    $(".progress-bar").show();
    model=undefined;
    model = await tf.loadLayersModel("http://localhost/web_deployement/static/web_models/strawberry_model/model.json");
    $(".progress-bar").hide();

}
async function pepper_bell_model(){
    modelName=undefined;
    modelName='pepper_bell';
    $(".progress-bar").show();
    model=undefined;
    model = await tf.loadLayersModel("http://localhost/web_deployement/static/web_models/pepper_bell_model/model.json");
    $(".progress-bar").hide();

}
async function cherry_model(){
    modelName=undefined;
    modelName='cherry';
    $(".progress-bar").show();
    model=undefined;
    model = await tf.loadLayersModel("http://localhost/web_deployement/static/web_models/cherry_model/model.json");
    $(".progress-bar").hide();

}

function load(func){
    window.open('rice_predict.html');
    localStorage.setItem('x',func);
    
}
(function load_helper(){
    mdl=localStorage.getItem('x');
    console.log(mdl);
    eval(mdl);
})();
//IIFE

/*(async function() {
    
    model = await tf.loadLayersModel("http://192.168.137.1:81/web_models/rice_leaf/model.json");
    $(".progress-bar").hide();
    console.log('mofo');
})();*/
$('#details-button').click(
    async function (){
        if(modelName=='cherry'){
            window.open('cherry.html')


        }
        else if(modelName=='grape'){
            window.open('grape.html')

        }
        else if(modelName=='pepper_bell'){
            window.open('pepper_bell.html')

        }
        else if(modelName=='strawberry'){
            window.open('strawberry.html')

        }
        else if(modelName=='tomato'){
            window.open('tomato.html')

        }
        else if(modelName=='rice'){
            window.open('rice.html')

        }
        else if(modelName=='apple'){
            window.open('apple.html')

        }
        else if(modelName=='peach'){
            window.open('peach.html')

        }
        else if(modelName=='potato'){
            window.open('potato.html')

        }
    }
    

)



$("#predict-button").click(
    async function (){
        let image = $("#selected-image").get(0);
let tensor =preprocessImage(image);
console.log('hello');
//todo
let predictions = await model.predict(tensor).data();

console.log('nhi');

let top5;
if(modelName=='rice'){
    top5= Array.from(predictions)
    .map(function (p, i) {
        return {
          
            probability: p,
           
            className: rice_disease_classes[i]
        };
    }).sort(function (a, b) {
        return b.probability - a.probability;
    });

}
else if(modelName=='potato'){
    top5= Array.from(predictions)
    .map(function (p, i) {
        return {
            probability: p,
            className: potato_disease_classes[i]
        };
    }).sort(function (a, b) {
        return b.probability - a.probability;

    });

}
else if(modelName=='tomato'){
    top5= Array.from(predictions)
    .map(function (p, i) {
        return {
            probability: p,
            className: tomato_disease_classes[i]
        };
    }).sort(function (a, b) {
        return b.probability - a.probability;
    });
}
else if(modelName=='grape'){
    top5= Array.from(predictions)
    .map(function (p, i) {
        return {
            probability: p,
            className: grape_disease_classes[i]
        };
    }).sort(function (a, b) {
        return b.probability - a.probability;
    });
}
else if(modelName=='apple'){
    top5= Array.from(predictions)
    .map(function (p, i) {
        return {
            probability: p,
            className: apple_disease_classes[i]
        };
    }).sort(function (a, b) {
        return b.probability - a.probability;
    });
}
else if(modelName=='peach'){
    top5= Array.from(predictions)
    .map(function (p, i) {
        return {
            probability: p,
            className: peach_disease_classes[i]
        };
    }).sort(function (a, b) {
        return b.probability - a.probability;
    });
}
else if(modelName=='strawberry'){
    top5= Array.from(predictions)
    .map(function (p, i) {
        return {
            probability: p,
            className: strawberry_disease_classes[i]
        };
    }).sort(function (a, b) {
        return b.probability - a.probability;
    });
}
else if(modelName=='pepper_bell'){
    top5= Array.from(predictions)
    .map(function (p, i) {
        return {
            probability: p,
            className: pepper_bell_disease_classes[i]
        };
    }).sort(function (a, b) {
        return b.probability - a.probability;
    });
}
else if(modelName=='cherry'){
    top5= Array.from(predictions)
    .map(function (p, i) {
        return {
            probability: p,
            className: cherry_disease_classes[i]
        };
    }).sort(function (a, b) {
        return b.probability - a.probability;
    });
}


    $("#prediction-list").empty();
top5.forEach(function (p) {
    $("#prediction-list").append(`<li>${p.className}: ${p.probability.toFixed(6)*100}%</li>`);
});

function preprocessImage(image) {
    let tensor = tf.browser.fromPixels(image)
        .resizeNearestNeighbor([224, 224])
        .toFloat();
    let offset = tf.scalar(127.5);
    return tensor.sub(offset)
        .div(offset)
        .expandDims();
    
    
    };


    }
);
