function calculateStageBtn_OnClick(){
    var year = document.getElementById("dateOfBirth").value.substr(6);
    var month = document.getElementById("dateOfBirth").value.substr(3,2);
    var day = document.getElementById("dateOfBirth").value.substr(0,2);

    var dob = new Date(month + "/" + day + "/" + year);

    const today = new Date();
    const birthDate = new Date(dob);
    let ageInMonths = (today.getMonth() + 1) - (birthDate.getMonth() + 1);
    ageInMonths += (today.getFullYear() - birthDate.getFullYear()) * 12;

    if(document.getElementById("childGender").value == "Male"){
        if(ageInMonths > 0 && ageInMonths <= 23){
            if(document.getElementById("childLength").value == 45){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 1.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value == 1.9){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.0 && document.getElementById("childWeight").value <= 3.0){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 46){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 1.9){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.0 && document.getElementById("childWeight").value <= 2.1){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.2 && document.getElementById("childWeight").value <= 3.1){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 47){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.1 && document.getElementById("childWeight").value <= 2.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.3 && document.getElementById("childWeight").value <= 3.3){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 48){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.3 && document.getElementById("childWeight").value <= 2.4){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.5 && document.getElementById("childWeight").value <= 3.6){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 49){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.3){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.4 && document.getElementById("childWeight").value <= 2.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.6 && document.getElementById("childWeight").value <= 3.8){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 50){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.6 && document.getElementById("childWeight").value <= 2.7){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.8 && document.getElementById("childWeight").value <= 4.0){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 51){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.6){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.7 && document.getElementById("childWeight").value <= 2.9){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 3.0 && document.getElementById("childWeight").value <= 4.2){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 52){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.9 && document.getElementById("childWeight").value <= 3.1){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 3.2 && document.getElementById("childWeight").value <= 4.5){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 53){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 3.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 3.1 && document.getElementById("childWeight").value <= 3.3){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 3.4 && document.getElementById("childWeight").value <= 4.8){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 54){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 3.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 3.3 && document.getElementById("childWeight").value <= 3.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 3.6 && document.getElementById("childWeight").value <= 5.1){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 55){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 3.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 3.6 && document.getElementById("childWeight").value <= 3.7){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 3.8 && document.getElementById("childWeight").value <= 5.4){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 56){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 3.7){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 3.8 && document.getElementById("childWeight").value <= 4.0){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 4.1 && document.getElementById("childWeight").value <= 5.8){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 57){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 3.9){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 4.0 && document.getElementById("childWeight").value <= 4.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 4.3 && document.getElementById("childWeight").value <= 6.1){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 58){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 4.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 4.3 && document.getElementById("childWeight").value <= 4.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 4.6 && document.getElementById("childWeight").value <= 6.4){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 59){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 4.4){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 4.5 && document.getElementById("childWeight").value <= 4.7){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 4.8 && document.getElementById("childWeight").value <= 6.8){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 60){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 4.6){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 4.7 && document.getElementById("childWeight").value <= 5.0){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 5.1 && document.getElementById("childWeight").value <= 7.1){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 61){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 4.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 4.9 && document.getElementById("childWeight").value <= 5.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 5.3 && document.getElementById("childWeight").value <= 7.4){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 62){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.1 && document.getElementById("childWeight").value <= 5.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 5.6 && document.getElementById("childWeight").value <= 7.7){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 63){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.3 && document.getElementById("childWeight").value <= 5.7){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 5.8 && document.getElementById("childWeight").value <= 8.0){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 64){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.4){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.5 && document.getElementById("childWeight").value <= 5.9){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.0 && document.getElementById("childWeight").value <= 8.3){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 65){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.6){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.7 && document.getElementById("childWeight").value <= 6.1){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.2 && document.getElementById("childWeight").value <= 8.6){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 66){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.9 && document.getElementById("childWeight").value <= 6.3){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.4 && document.getElementById("childWeight").value <= 8.9){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 67){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.1 && document.getElementById("childWeight").value <= 6.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.6 && document.getElementById("childWeight").value <= 9.2){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 68){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.3 && document.getElementById("childWeight").value <= 6.7){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.8 && document.getElementById("childWeight").value <= 9.4){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 69){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.4){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.5 && document.getElementById("childWeight").value <= 6.9){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.0 && document.getElementById("childWeight").value <= 9.7){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 70){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.6 && document.getElementById("childWeight").value <= 7.1){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.2 && document.getElementById("childWeight").value <= 10.0){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 71){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.7){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.8 && document.getElementById("childWeight").value <= 7.3){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.4 && document.getElementById("childWeight").value <= 10.2){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 72){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.9){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.0 && document.getElementById("childWeight").value <= 7.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.6 && document.getElementById("childWeight").value <= 10.5){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 73){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.1){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.2 && document.getElementById("childWeight").value <= 7.6){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.7 && document.getElementById("childWeight").value <= 10.8){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 74){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.3 && document.getElementById("childWeight").value <= 7.8){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.9 && document.getElementById("childWeight").value <= 11.0){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 75){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.4){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.5 && document.getElementById("childWeight").value <= 8.0){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.1 && document.getElementById("childWeight").value <= 11.3){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 76){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.6 && document.getElementById("childWeight").value <= 8.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.3 && document.getElementById("childWeight").value <= 11.5){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 77){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.7){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.8 && document.getElementById("childWeight").value <= 8.3){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.4 && document.getElementById("childWeight").value <= 11.7){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 78){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.9 && document.getElementById("childWeight").value <= 8.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.6 && document.getElementById("childWeight").value <= 12.0){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 79){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 8.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 8.1 && document.getElementById("childWeight").value <= 8.6){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.7 && document.getElementById("childWeight").value <= 12.2){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 80){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 8.1){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 8.2 && document.getElementById("childWeight").value <= 8.8){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.9 && document.getElementById("childWeight").value <= 12.4){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 81){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 8.3){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 8.4 && document.getElementById("childWeight").value <= 9.0){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 9.1 && document.getElementById("childWeight").value <= 12.6){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 82){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 8.4){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 8.5 && document.getElementById("childWeight").value <= 9.1){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 9.2 && document.getElementById("childWeight").value <= 12.8){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 83){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 8.6){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 8.7 && document.getElementById("childWeight").value <= 9.3){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 9.4 && document.getElementById("childWeight").value <= 13.1){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childLength").value == 84){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.9 && document.getElementById("childWeight").value <= 8.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.6 && document.getElementById("childWeight").value <= 12.0){
                    setNormal();
                }else{
                    setStageNone();
                }
            }
        }
        
        if(ageInMonths >= 24 && ageInMonths <= 59){
            if(document.getElementById("childHeight").value == 65){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.9 && document.getElementById("childWeight").value <= 6.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.3 && document.getElementById("childWeight").value <= 8.8){
                    setNormal();
                }else{
                    setStageNone();
                }
} else if(document.getElementById("childHeight").value == 66){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.1 && document.getElementById("childWeight").value <= 6.4){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.5 && document.getElementById("childWeight").value <= 9.1){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 67){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.1){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.2 && document.getElementById("childWeight").value <= 6.6){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.7 && document.getElementById("childWeight").value <= 9.4){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 68){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.3){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.4 && document.getElementById("childWeight").value <= 6.8){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.9 && document.getElementById("childWeight").value <= 9.6){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 69){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.6 && document.getElementById("childWeight").value <= 7.0){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.1 && document.getElementById("childWeight").value <= 9.9){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 70){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.7){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.8 && document.getElementById("childWeight").value <= 7.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.3 && document.getElementById("childWeight").value <= 10.2){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 71){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.9 && document.getElementById("childWeight").value <= 7.4){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.5 && document.getElementById("childWeight").value <= 10.4){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 72){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.1 && document.getElementById("childWeight").value <= 7.6){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.7 && document.getElementById("childWeight").value <= 10.7){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 73){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.3 && document.getElementById("childWeight").value <= 7.8){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.9 && document.getElementById("childWeight").value <= 11.0){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 74){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.3){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.4 && document.getElementById("childWeight").value <= 7.9){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.0 && document.getElementById("childWeight").value <= 11.2){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 75){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.6 && document.getElementById("childWeight").value <= 8.1){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.2 && document.getElementById("childWeight").value <= 11.4){
                    setNormal();
                }else{
                    setStageNone();
                }
}
        }
    }


    if(document.getElementById("childGender").value == "Female"){
        if(ageInMonths > 0 && ageInMonths <= 23){
            if(document.getElementById("childLength").value == 45){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 1.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 1.9 && document.getElementById("childWeight").value <= 2.0){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.1 && document.getElementById("childWeight").value <= 3.0){
                    setNormal();
                }else{
                    setStageNone();
                }
} else if(document.getElementById("childLength").value == 46){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 1.9){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.0 && document.getElementById("childWeight").value <= 2.1){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.2 && document.getElementById("childWeight").value <= 3.2){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 47){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.1){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.2 && document.getElementById("childWeight").value <= 2.3){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.4 && document.getElementById("childWeight").value <= 3.4){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 48){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.3 && document.getElementById("childWeight").value <= 2.4){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.5 && document.getElementById("childWeight").value <= 3.6){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 49){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.3){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.4 && document.getElementById("childWeight").value <= 2.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.6 && document.getElementById("childWeight").value <= 3.8){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 50){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.6 && document.getElementById("childWeight").value <= 2.7){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 2.8 && document.getElementById("childWeight").value <= 4.0){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 51){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.7){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.8 && document.getElementById("childWeight").value <= 2.9){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 3.0 && document.getElementById("childWeight").value <= 4.3){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 52){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 2.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 2.9 && document.getElementById("childWeight").value <= 3.1){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 3.2 && document.getElementById("childWeight").value <= 4.6){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 53){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 3.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 3.1 && document.getElementById("childWeight").value <= 3.3){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 3.4 && document.getElementById("childWeight").value <= 4.9){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 54){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 3.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 3.3 && document.getElementById("childWeight").value <= 3.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 3.6 && document.getElementById("childWeight").value <= 5.2){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 55){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 3.4){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 3.5 && document.getElementById("childWeight").value <= 3.7){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 3.8 && document.getElementById("childWeight").value <= 5.5){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 56){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 3.6){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 3.7 && document.getElementById("childWeight").value <= 3.9){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 4.0 && document.getElementById("childWeight").value <= 5.8){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 57){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 3.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 3.9 && document.getElementById("childWeight").value <= 4.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 4.3 && document.getElementById("childWeight").value <= 6.1){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 58){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 4.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 4.1 && document.getElementById("childWeight").value <= 4.4){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 4.5 && document.getElementById("childWeight").value <= 6.5){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 59){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 4.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 4.3 && document.getElementById("childWeight").value <= 4.6){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 4.7 && document.getElementById("childWeight").value <= 6.8){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 60){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 4.4){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 4.5 && document.getElementById("childWeight").value <= 4.8){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 4.9 && document.getElementById("childWeight").value <= 7.1){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 61){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 4.6){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 4.7 && document.getElementById("childWeight").value <= 5.0){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 5.1 && document.getElementById("childWeight").value <= 7.4){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 62){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 4.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 4.9 && document.getElementById("childWeight").value <= 5.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 5.3 && document.getElementById("childWeight").value <= 7.7){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 63){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.1 && document.getElementById("childWeight").value <= 5.4){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 5.5 && document.getElementById("childWeight").value <= 8.0){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 64){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.3 && document.getElementById("childWeight").value <= 5.6){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 5.7 && document.getElementById("childWeight").value <= 8.3){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 65){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.4){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.5 && document.getElementById("childWeight").value <= 5.8){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 5.9 && document.getElementById("childWeight").value <= 8.6){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 66){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.6 && document.getElementById("childWeight").value <= 6.0){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.1 && document.getElementById("childWeight").value <= 8.8){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 67){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.7){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.8 && document.getElementById("childWeight").value <= 6.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.3 && document.getElementById("childWeight").value <= 9.1){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 68){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.9){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.0 && document.getElementById("childWeight").value <= 6.4){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.5 && document.getElementById("childWeight").value <= 9.4){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 69){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.1 && document.getElementById("childWeight").value <= 6.6){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.7 && document.getElementById("childWeight").value <= 9.6){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 70){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.3 && document.getElementById("childWeight").value <= 6.8){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.9 && document.getElementById("childWeight").value <= 9.9){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 71){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.4){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.5 && document.getElementById("childWeight").value <= 6.9){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.0 && document.getElementById("childWeight").value <= 10.1){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 72){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.6 && document.getElementById("childWeight").value <= 7.1){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.2 && document.getElementById("childWeight").value <= 10.3){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 73){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.7){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.8 && document.getElementById("childWeight").value <= 7.3){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.4 && document.getElementById("childWeight").value <= 10.6){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 74){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.9 && document.getElementById("childWeight").value <= 7.4){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.5 && document.getElementById("childWeight").value <= 10.8){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 75){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.1 && document.getElementById("childWeight").value <= 7.6){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.7 && document.getElementById("childWeight").value <= 11.0){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 76){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.1){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.2 && document.getElementById("childWeight").value <= 7.7){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.8 && document.getElementById("childWeight").value <= 11.2){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 77){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.3){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.4 && document.getElementById("childWeight").value <= 7.9){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.0 && document.getElementById("childWeight").value <= 11.5){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childLength").value == 78){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.4){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.5 && document.getElementById("childWeight").value <= 8.1){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 8.2 && document.getElementById("childWeight").value <= 11.7){
                    setNormal();
                }else{
                    setStageNone();
                }
}
        }

        if(ageInMonths >= 24 && ageInMonths <= 59){
            if(document.getElementById("childHeight").value == 65){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.6 && document.getElementById("childWeight").value <= 6.0){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.1 && document.getElementById("childWeight").value <= 8.7){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childHeight").value == 66){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.7){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.8 && document.getElementById("childWeight").value <= 6.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.3 && document.getElementById("childWeight").value <= 9.0){
                    setNormal();
                }else{
                    setStageNone();
                }
            }else if(document.getElementById("childHeight").value == 67){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 5.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 5.9 && document.getElementById("childWeight").value <= 6.3){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.4 && document.getElementById("childWeight").value <= 9.3){
                    setNormal();
                }else{
                    setStageNone();
                }
} else if(document.getElementById("childHeight").value == 68){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.0){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.1 && document.getElementById("childWeight").value <= 6.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.6 && document.getElementById("childWeight").value <= 9.5){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 69){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.2){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.3 && document.getElementById("childWeight").value <= 6.7){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 6.8 && document.getElementById("childWeight").value <= 9.8){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 70){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.3){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.4 && document.getElementById("childWeight").value <= 6.9){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.0 && document.getElementById("childWeight").value <= 10.0){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 71){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.5){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.6 && document.getElementById("childWeight").value <= 7.0){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.1 && document.getElementById("childWeight").value <= 10.3){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 72){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.6){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.7 && document.getElementById("childWeight").value <= 7.2){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.3 && document.getElementById("childWeight").value <= 10.5){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 73){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.8){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 6.9 && document.getElementById("childWeight").value <= 7.4){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.5 && document.getElementById("childWeight").value <= 10.7){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 74){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 6.9){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.0 && document.getElementById("childWeight").value <= 7.5){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.6 && document.getElementById("childWeight").value <= 11.0){
                    setNormal();
                }else{
                    setStageNone();
                }
}else if(document.getElementById("childHeight").value == 75){
                if(document.getElementById("childWeight").value >= 0 && document.getElementById("childWeight").value <= 7.1){
                    setSAM();
                }else if(document.getElementById("childWeight").value >= 7.2 && document.getElementById("childWeight").value <= 7.7){
                    setMAM();
                }else if(document.getElementById("childWeight").value >= 7.8 && document.getElementById("childWeight").value <= 11.2){
                    setNormal();
                }else{
                    setStageNone();
                }
}

        }
    }
}

function setSAM(){
    document.getElementById("malnutritionStage").style.backgroundColor = "#F76462";
    document.getElementById("malnutritionStage").value = "SAM";
    document.getElementById("SAMsuppGuidImg").style.display = "block";
    document.getElementById("MAMsuppGuidImg").style.display = "none";
    document.getElementById("SAMdietaryGuidImg").style.display = "block";
    document.getElementById("MAMdietaryGuidImg1").style.display = "none";
    document.getElementById("MAMdietaryGuidImg2").style.display = "none";
}

function setMAM(){
    document.getElementById("malnutritionStage").style.backgroundColor = "#EEE465";
    document.getElementById("malnutritionStage").value = "MAM";
    document.getElementById("SAMsuppGuidImg").style.display = "none";
    document.getElementById("MAMsuppGuidImg").style.display = "block";
    document.getElementById("SAMdietaryGuidImg").style.display = "none";
    document.getElementById("MAMdietaryGuidImg1").style.display = "block";
    document.getElementById("MAMdietaryGuidImg2").style.display = "block";
}

function setNormal(){
    document.getElementById("malnutritionStage").style.backgroundColor = "#63D36D";
    document.getElementById("malnutritionStage").value = "NORMAL";
    document.getElementById("SAMsuppGuidImg").style.display = "none";
    document.getElementById("MAMsuppGuidImg").style.display = "none";
    document.getElementById("SAMdietaryGuidImg").style.display = "none";
    document.getElementById("MAMdietaryGuidImg1").style.display = "none";
    document.getElementById("MAMdietaryGuidImg2").style.display = "none";
}

function setStageNone(){
    document.getElementById("malnutritionStage").style.backgroundColor = "white";
    document.getElementById("malnutritionStage").value = "";
    document.getElementById("SAMsuppGuidImg").style.display = "none";
    document.getElementById("MAMsuppGuidImg").style.display = "none";
    document.getElementById("SAMdietaryGuidImg").style.display = "none";
    document.getElementById("MAMdietaryGuidImg1").style.display = "none";
    document.getElementById("MAMdietaryGuidImg2").style.display = "none";
}