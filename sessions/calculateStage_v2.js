function calculateStage(dateOfBirth, childGender, childLength, childWeight, childHeight){
    var year = dateOfBirth.substr(6);
    var month = dateOfBirth.substr(3,2);
    var day = dateOfBirth.substr(0,2);

    var dob = new Date(month + "/" + day + "/" + year);

    const today = new Date();
    const birthDate = new Date(dob);
    let ageInMonths = (today.getMonth() + 1) - (birthDate.getMonth() + 1);
    ageInMonths += (today.getFullYear() - birthDate.getFullYear()) * 12;

    if(childGender == "Male"){
        if(ageInMonths > 0 && ageInMonths <= 23){
            if(childLength == 45){
                if(childWeight >= 0 && childWeight <= 1.8){
                    return "SAM";
                }else if(childWeight == 1.9){
                    return "MAM";
                }else if(childWeight >= 2.0 && childWeight <= 3.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 46){
                if(childWeight >= 0 && childWeight <= 1.9){
                    return "SAM";
                }else if(childWeight >= 2.0 && childWeight <= 2.1){
                    return "MAM";
                }else if(childWeight >= 2.2 && childWeight <= 3.1){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 47){
                if(childWeight >= 0 && childWeight <= 2.0){
                    return "SAM";
                }else if(childWeight >= 2.1 && childWeight <= 2.2){
                    return "MAM";
                }else if(childWeight >= 2.3 && childWeight <= 3.3){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 48){
                if(childWeight >= 0 && childWeight <= 2.2){
                    return "SAM";
                }else if(childWeight >= 2.3 && childWeight <= 2.4){
                    return "MAM";
                }else if(childWeight >= 2.5 && childWeight <= 3.6){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 49){
                if(childWeight >= 0 && childWeight <= 2.3){
                    return "SAM";
                }else if(childWeight >= 2.4 && childWeight <= 2.5){
                    return "MAM";
                }else if(childWeight >= 2.6 && childWeight <= 3.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 50){
                if(childWeight >= 0 && childWeight <= 2.5){
                    return "SAM";
                }else if(childWeight >= 2.6 && childWeight <= 2.7){
                    return "MAM";
                }else if(childWeight >= 2.8 && childWeight <= 4.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 51){
                if(childWeight >= 0 && childWeight <= 2.6){
                    return "SAM";
                }else if(childWeight >= 2.7 && childWeight <= 2.9){
                    return "MAM";
                }else if(childWeight >= 3.0 && childWeight <= 4.2){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 52){
                if(childWeight >= 0 && childWeight <= 2.8){
                    return "SAM";
                }else if(childWeight >= 2.9 && childWeight <= 3.1){
                    return "MAM";
                }else if(childWeight >= 3.2 && childWeight <= 4.5){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 53){
                if(childWeight >= 0 && childWeight <= 3.0){
                    return "SAM";
                }else if(childWeight >= 3.1 && childWeight <= 3.3){
                    return "MAM";
                }else if(childWeight >= 3.4 && childWeight <= 4.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 54){
                if(childWeight >= 0 && childWeight <= 3.2){
                    return "SAM";
                }else if(childWeight >= 3.3 && childWeight <= 3.5){
                    return "MAM";
                }else if(childWeight >= 3.6 && childWeight <= 5.1){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 55){
                if(childWeight >= 0 && childWeight <= 3.5){
                    return "SAM";
                }else if(childWeight >= 3.6 && childWeight <= 3.7){
                    return "MAM";
                }else if(childWeight >= 3.8 && childWeight <= 5.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 56){
                if(childWeight >= 0 && childWeight <= 3.7){
                    return "SAM";
                }else if(childWeight >= 3.8 && childWeight <= 4.0){
                    return "MAM";
                }else if(childWeight >= 4.1 && childWeight <= 5.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 57){
                if(childWeight >= 0 && childWeight <= 3.9){
                    return "SAM";
                }else if(childWeight >= 4.0 && childWeight <= 4.2){
                    return "MAM";
                }else if(childWeight >= 4.3 && childWeight <= 6.1){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 58){
                if(childWeight >= 0 && childWeight <= 4.2){
                    return "SAM";
                }else if(childWeight >= 4.3 && childWeight <= 4.5){
                    return "MAM";
                }else if(childWeight >= 4.6 && childWeight <= 6.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 59){
                if(childWeight >= 0 && childWeight <= 4.4){
                    return "SAM";
                }else if(childWeight >= 4.5 && childWeight <= 4.7){
                    return "MAM";
                }else if(childWeight >= 4.8 && childWeight <= 6.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 60){
                if(childWeight >= 0 && childWeight <= 4.6){
                    return "SAM";
                }else if(childWeight >= 4.7 && childWeight <= 5.0){
                    return "MAM";
                }else if(childWeight >= 5.1 && childWeight <= 7.1){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 61){
                if(childWeight >= 0 && childWeight <= 4.8){
                    return "SAM";
                }else if(childWeight >= 4.9 && childWeight <= 5.2){
                    return "MAM";
                }else if(childWeight >= 5.3 && childWeight <= 7.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 62){
                if(childWeight >= 0 && childWeight <= 5.0){
                    return "SAM";
                }else if(childWeight >= 5.1 && childWeight <= 5.5){
                    return "MAM";
                }else if(childWeight >= 5.6 && childWeight <= 7.7){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 63){
                if(childWeight >= 0 && childWeight <= 5.2){
                    return "SAM";
                }else if(childWeight >= 5.3 && childWeight <= 5.7){
                    return "MAM";
                }else if(childWeight >= 5.8 && childWeight <= 8.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 64){
                if(childWeight >= 0 && childWeight <= 5.4){
                    return "SAM";
                }else if(childWeight >= 5.5 && childWeight <= 5.9){
                    return "MAM";
                }else if(childWeight >= 6.0 && childWeight <= 8.3){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 65){
                if(childWeight >= 0 && childWeight <= 5.6){
                    return "SAM";
                }else if(childWeight >= 5.7 && childWeight <= 6.1){
                    return "MAM";
                }else if(childWeight >= 6.2 && childWeight <= 8.6){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 66){
                if(childWeight >= 0 && childWeight <= 5.8){
                    return "SAM";
                }else if(childWeight >= 5.9 && childWeight <= 6.3){
                    return "MAM";
                }else if(childWeight >= 6.4 && childWeight <= 8.9){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 67){
                if(childWeight >= 0 && childWeight <= 6.0){
                    return "SAM";
                }else if(childWeight >= 6.1 && childWeight <= 6.5){
                    return "MAM";
                }else if(childWeight >= 6.6 && childWeight <= 9.2){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 68){
                if(childWeight >= 0 && childWeight <= 6.2){
                    return "SAM";
                }else if(childWeight >= 6.3 && childWeight <= 6.7){
                    return "MAM";
                }else if(childWeight >= 6.8 && childWeight <= 9.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 69){
                if(childWeight >= 0 && childWeight <= 6.4){
                    return "SAM";
                }else if(childWeight >= 6.5 && childWeight <= 6.9){
                    return "MAM";
                }else if(childWeight >= 7.0 && childWeight <= 9.7){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 70){
                if(childWeight >= 0 && childWeight <= 6.5){
                    return "SAM";
                }else if(childWeight >= 6.6 && childWeight <= 7.1){
                    return "MAM";
                }else if(childWeight >= 7.2 && childWeight <= 10.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 71){
                if(childWeight >= 0 && childWeight <= 6.7){
                    return "SAM";
                }else if(childWeight >= 6.8 && childWeight <= 7.3){
                    return "MAM";
                }else if(childWeight >= 7.4 && childWeight <= 10.2){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 72){
                if(childWeight >= 0 && childWeight <= 6.9){
                    return "SAM";
                }else if(childWeight >= 7.0 && childWeight <= 7.5){
                    return "MAM";
                }else if(childWeight >= 7.6 && childWeight <= 10.5){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 73){
                if(childWeight >= 0 && childWeight <= 7.1){
                    return "SAM";
                }else if(childWeight >= 7.2 && childWeight <= 7.6){
                    return "MAM";
                }else if(childWeight >= 7.7 && childWeight <= 10.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 74){
                if(childWeight >= 0 && childWeight <= 7.2){
                    return "SAM";
                }else if(childWeight >= 7.3 && childWeight <= 7.8){
                    return "MAM";
                }else if(childWeight >= 7.9 && childWeight <= 11.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 75){
                if(childWeight >= 0 && childWeight <= 7.4){
                    return "SAM";
                }else if(childWeight >= 7.5 && childWeight <= 8.0){
                    return "MAM";
                }else if(childWeight >= 8.1 && childWeight <= 11.3){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 76){
                if(childWeight >= 0 && childWeight <= 7.5){
                    return "SAM";
                }else if(childWeight >= 7.6 && childWeight <= 8.2){
                    return "MAM";
                }else if(childWeight >= 8.3 && childWeight <= 11.5){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 77){
                if(childWeight >= 0 && childWeight <= 7.7){
                    return "SAM";
                }else if(childWeight >= 7.8 && childWeight <= 8.3){
                    return "MAM";
                }else if(childWeight >= 8.4 && childWeight <= 11.7){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 78){
                if(childWeight >= 0 && childWeight <= 7.8){
                    return "SAM";
                }else if(childWeight >= 7.9 && childWeight <= 8.5){
                    return "MAM";
                }else if(childWeight >= 8.6 && childWeight <= 12.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 79){
                if(childWeight >= 0 && childWeight <= 8.0){
                    return "SAM";
                }else if(childWeight >= 8.1 && childWeight <= 8.6){
                    return "MAM";
                }else if(childWeight >= 8.7 && childWeight <= 12.2){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 80){
                if(childWeight >= 0 && childWeight <= 8.1){
                    return "SAM";
                }else if(childWeight >= 8.2 && childWeight <= 8.8){
                    return "MAM";
                }else if(childWeight >= 8.9 && childWeight <= 12.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 81){
                if(childWeight >= 0 && childWeight <= 8.3){
                    return "SAM";
                }else if(childWeight >= 8.4 && childWeight <= 9.0){
                    return "MAM";
                }else if(childWeight >= 9.1 && childWeight <= 12.6){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 82){
                if(childWeight >= 0 && childWeight <= 8.4){
                    return "SAM";
                }else if(childWeight >= 8.5 && childWeight <= 9.1){
                    return "MAM";
                }else if(childWeight >= 9.2 && childWeight <= 12.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 83){
                if(childWeight >= 0 && childWeight <= 8.6){
                    return "SAM";
                }else if(childWeight >= 8.7 && childWeight <= 9.3){
                    return "MAM";
                }else if(childWeight >= 9.4 && childWeight <= 13.1){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childLength == 84){
                if(childWeight >= 0 && childWeight <= 7.8){
                    return "SAM";
                }else if(childWeight >= 7.9 && childWeight <= 8.5){
                    return "MAM";
                }else if(childWeight >= 8.6 && childWeight <= 12.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }
        }
        
        if(ageInMonths >= 24 && ageInMonths <= 59){
            if(childHeight == 65){
                if(childWeight >= 0 && childWeight <= 5.8){
                    return "SAM";
                }else if(childWeight >= 5.9 && childWeight <= 6.2){
                    return "MAM";
                }else if(childWeight >= 6.3 && childWeight <= 8.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
} else if(childHeight == 66){
                if(childWeight >= 0 && childWeight <= 6.0){
                    return "SAM";
                }else if(childWeight >= 6.1 && childWeight <= 6.4){
                    return "MAM";
                }else if(childWeight >= 6.5 && childWeight <= 9.1){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 67){
                if(childWeight >= 0 && childWeight <= 6.1){
                    return "SAM";
                }else if(childWeight >= 6.2 && childWeight <= 6.6){
                    return "MAM";
                }else if(childWeight >= 6.7 && childWeight <= 9.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 68){
                if(childWeight >= 0 && childWeight <= 6.3){
                    return "SAM";
                }else if(childWeight >= 6.4 && childWeight <= 6.8){
                    return "MAM";
                }else if(childWeight >= 6.9 && childWeight <= 9.6){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 69){
                if(childWeight >= 0 && childWeight <= 6.5){
                    return "SAM";
                }else if(childWeight >= 6.6 && childWeight <= 7.0){
                    return "MAM";
                }else if(childWeight >= 7.1 && childWeight <= 9.9){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 70){
                if(childWeight >= 0 && childWeight <= 6.7){
                    return "SAM";
                }else if(childWeight >= 6.8 && childWeight <= 7.2){
                    return "MAM";
                }else if(childWeight >= 7.3 && childWeight <= 10.2){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 71){
                if(childWeight >= 0 && childWeight <= 6.8){
                    return "SAM";
                }else if(childWeight >= 6.9 && childWeight <= 7.4){
                    return "MAM";
                }else if(childWeight >= 7.5 && childWeight <= 10.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 72){
                if(childWeight >= 0 && childWeight <= 7.0){
                    return "SAM";
                }else if(childWeight >= 7.1 && childWeight <= 7.6){
                    return "MAM";
                }else if(childWeight >= 7.7 && childWeight <= 10.7){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 73){
                if(childWeight >= 0 && childWeight <= 7.2){
                    return "SAM";
                }else if(childWeight >= 7.3 && childWeight <= 7.8){
                    return "MAM";
                }else if(childWeight >= 7.9 && childWeight <= 11.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 74){
                if(childWeight >= 0 && childWeight <= 7.3){
                    return "SAM";
                }else if(childWeight >= 7.4 && childWeight <= 7.9){
                    return "MAM";
                }else if(childWeight >= 8.0 && childWeight <= 11.2){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 75){
                if(childWeight >= 0 && childWeight <= 7.5){
                    return "SAM";
                }else if(childWeight >= 7.6 && childWeight <= 8.1){
                    return "MAM";
                }else if(childWeight >= 8.2 && childWeight <= 11.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}
        }
    }


    if(childGender == "Female"){
        if(ageInMonths > 0 && ageInMonths <= 23){
            if(childLength == 45){
                if(childWeight >= 0 && childWeight <= 1.8){
                    return "SAM";
                }else if(childWeight >= 1.9 && childWeight <= 2.0){
                    return "MAM";
                }else if(childWeight >= 2.1 && childWeight <= 3.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
} else if(childLength == 46){
                if(childWeight >= 0 && childWeight <= 1.9){
                    return "SAM";
                }else if(childWeight >= 2.0 && childWeight <= 2.1){
                    return "MAM";
                }else if(childWeight >= 2.2 && childWeight <= 3.2){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 47){
                if(childWeight >= 0 && childWeight <= 2.1){
                    return "SAM";
                }else if(childWeight >= 2.2 && childWeight <= 2.3){
                    return "MAM";
                }else if(childWeight >= 2.4 && childWeight <= 3.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 48){
                if(childWeight >= 0 && childWeight <= 2.2){
                    return "SAM";
                }else if(childWeight >= 2.3 && childWeight <= 2.4){
                    return "MAM";
                }else if(childWeight >= 2.5 && childWeight <= 3.6){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 49){
                if(childWeight >= 0 && childWeight <= 2.3){
                    return "SAM";
                }else if(childWeight >= 2.4 && childWeight <= 2.5){
                    return "MAM";
                }else if(childWeight >= 2.6 && childWeight <= 3.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 50){
                if(childWeight >= 0 && childWeight <= 2.5){
                    return "SAM";
                }else if(childWeight >= 2.6 && childWeight <= 2.7){
                    return "MAM";
                }else if(childWeight >= 2.8 && childWeight <= 4.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 51){
                if(childWeight >= 0 && childWeight <= 2.7){
                    return "SAM";
                }else if(childWeight >= 2.8 && childWeight <= 2.9){
                    return "MAM";
                }else if(childWeight >= 3.0 && childWeight <= 4.3){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 52){
                if(childWeight >= 0 && childWeight <= 2.8){
                    return "SAM";
                }else if(childWeight >= 2.9 && childWeight <= 3.1){
                    return "MAM";
                }else if(childWeight >= 3.2 && childWeight <= 4.6){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 53){
                if(childWeight >= 0 && childWeight <= 3.0){
                    return "SAM";
                }else if(childWeight >= 3.1 && childWeight <= 3.3){
                    return "MAM";
                }else if(childWeight >= 3.4 && childWeight <= 4.9){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 54){
                if(childWeight >= 0 && childWeight <= 3.2){
                    return "SAM";
                }else if(childWeight >= 3.3 && childWeight <= 3.5){
                    return "MAM";
                }else if(childWeight >= 3.6 && childWeight <= 5.2){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 55){
                if(childWeight >= 0 && childWeight <= 3.4){
                    return "SAM";
                }else if(childWeight >= 3.5 && childWeight <= 3.7){
                    return "MAM";
                }else if(childWeight >= 3.8 && childWeight <= 5.5){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 56){
                if(childWeight >= 0 && childWeight <= 3.6){
                    return "SAM";
                }else if(childWeight >= 3.7 && childWeight <= 3.9){
                    return "MAM";
                }else if(childWeight >= 4.0 && childWeight <= 5.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 57){
                if(childWeight >= 0 && childWeight <= 3.8){
                    return "SAM";
                }else if(childWeight >= 3.9 && childWeight <= 4.2){
                    return "MAM";
                }else if(childWeight >= 4.3 && childWeight <= 6.1){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 58){
                if(childWeight >= 0 && childWeight <= 4.0){
                    return "SAM";
                }else if(childWeight >= 4.1 && childWeight <= 4.4){
                    return "MAM";
                }else if(childWeight >= 4.5 && childWeight <= 6.5){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 59){
                if(childWeight >= 0 && childWeight <= 4.2){
                    return "SAM";
                }else if(childWeight >= 4.3 && childWeight <= 4.6){
                    return "MAM";
                }else if(childWeight >= 4.7 && childWeight <= 6.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 60){
                if(childWeight >= 0 && childWeight <= 4.4){
                    return "SAM";
                }else if(childWeight >= 4.5 && childWeight <= 4.8){
                    return "MAM";
                }else if(childWeight >= 4.9 && childWeight <= 7.1){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 61){
                if(childWeight >= 0 && childWeight <= 4.6){
                    return "SAM";
                }else if(childWeight >= 4.7 && childWeight <= 5.0){
                    return "MAM";
                }else if(childWeight >= 5.1 && childWeight <= 7.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 62){
                if(childWeight >= 0 && childWeight <= 4.8){
                    return "SAM";
                }else if(childWeight >= 4.9 && childWeight <= 5.2){
                    return "MAM";
                }else if(childWeight >= 5.3 && childWeight <= 7.7){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 63){
                if(childWeight >= 0 && childWeight <= 5.0){
                    return "SAM";
                }else if(childWeight >= 5.1 && childWeight <= 5.4){
                    return "MAM";
                }else if(childWeight >= 5.5 && childWeight <= 8.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 64){
                if(childWeight >= 0 && childWeight <= 5.2){
                    return "SAM";
                }else if(childWeight >= 5.3 && childWeight <= 5.6){
                    return "MAM";
                }else if(childWeight >= 5.7 && childWeight <= 8.3){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 65){
                if(childWeight >= 0 && childWeight <= 5.4){
                    return "SAM";
                }else if(childWeight >= 5.5 && childWeight <= 5.8){
                    return "MAM";
                }else if(childWeight >= 5.9 && childWeight <= 8.6){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 66){
                if(childWeight >= 0 && childWeight <= 5.5){
                    return "SAM";
                }else if(childWeight >= 5.6 && childWeight <= 6.0){
                    return "MAM";
                }else if(childWeight >= 6.1 && childWeight <= 8.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 67){
                if(childWeight >= 0 && childWeight <= 5.7){
                    return "SAM";
                }else if(childWeight >= 5.8 && childWeight <= 6.2){
                    return "MAM";
                }else if(childWeight >= 6.3 && childWeight <= 9.1){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 68){
                if(childWeight >= 0 && childWeight <= 5.9){
                    return "SAM";
                }else if(childWeight >= 6.0 && childWeight <= 6.4){
                    return "MAM";
                }else if(childWeight >= 6.5 && childWeight <= 9.4){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 69){
                if(childWeight >= 0 && childWeight <= 6.0){
                    return "SAM";
                }else if(childWeight >= 6.1 && childWeight <= 6.6){
                    return "MAM";
                }else if(childWeight >= 6.7 && childWeight <= 9.6){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 70){
                if(childWeight >= 0 && childWeight <= 6.2){
                    return "SAM";
                }else if(childWeight >= 6.3 && childWeight <= 6.8){
                    return "MAM";
                }else if(childWeight >= 6.9 && childWeight <= 9.9){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 71){
                if(childWeight >= 0 && childWeight <= 6.4){
                    return "SAM";
                }else if(childWeight >= 6.5 && childWeight <= 6.9){
                    return "MAM";
                }else if(childWeight >= 7.0 && childWeight <= 10.1){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 72){
                if(childWeight >= 0 && childWeight <= 6.5){
                    return "SAM";
                }else if(childWeight >= 6.6 && childWeight <= 7.1){
                    return "MAM";
                }else if(childWeight >= 7.2 && childWeight <= 10.3){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 73){
                if(childWeight >= 0 && childWeight <= 6.7){
                    return "SAM";
                }else if(childWeight >= 6.8 && childWeight <= 7.3){
                    return "MAM";
                }else if(childWeight >= 7.4 && childWeight <= 10.6){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 74){
                if(childWeight >= 0 && childWeight <= 6.8){
                    return "SAM";
                }else if(childWeight >= 6.9 && childWeight <= 7.4){
                    return "MAM";
                }else if(childWeight >= 7.5 && childWeight <= 10.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 75){
                if(childWeight >= 0 && childWeight <= 7.0){
                    return "SAM";
                }else if(childWeight >= 7.1 && childWeight <= 7.6){
                    return "MAM";
                }else if(childWeight >= 7.7 && childWeight <= 11.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 76){
                if(childWeight >= 0 && childWeight <= 7.1){
                    return "SAM";
                }else if(childWeight >= 7.2 && childWeight <= 7.7){
                    return "MAM";
                }else if(childWeight >= 7.8 && childWeight <= 11.2){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 77){
                if(childWeight >= 0 && childWeight <= 7.3){
                    return "SAM";
                }else if(childWeight >= 7.4 && childWeight <= 7.9){
                    return "MAM";
                }else if(childWeight >= 8.0 && childWeight <= 11.5){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childLength == 78){
                if(childWeight >= 0 && childWeight <= 7.4){
                    return "SAM";
                }else if(childWeight >= 7.5 && childWeight <= 8.1){
                    return "MAM";
                }else if(childWeight >= 8.2 && childWeight <= 11.7){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}
        }

        if(ageInMonths >= 24 && ageInMonths <= 59){
            if(childHeight == 65){
                if(childWeight >= 0 && childWeight <= 5.5){
                    return "SAM";
                }else if(childWeight >= 5.6 && childWeight <= 6.0){
                    return "MAM";
                }else if(childWeight >= 6.1 && childWeight <= 8.7){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childHeight == 66){
                if(childWeight >= 0 && childWeight <= 5.7){
                    return "SAM";
                }else if(childWeight >= 5.8 && childWeight <= 6.2){
                    return "MAM";
                }else if(childWeight >= 6.3 && childWeight <= 9.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
            }else if(childHeight == 67){
                if(childWeight >= 0 && childWeight <= 5.8){
                    return "SAM";
                }else if(childWeight >= 5.9 && childWeight <= 6.3){
                    return "MAM";
                }else if(childWeight >= 6.4 && childWeight <= 9.3){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
} else if(childHeight == 68){
                if(childWeight >= 0 && childWeight <= 6.0){
                    return "SAM";
                }else if(childWeight >= 6.1 && childWeight <= 6.5){
                    return "MAM";
                }else if(childWeight >= 6.6 && childWeight <= 9.5){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 69){
                if(childWeight >= 0 && childWeight <= 6.2){
                    return "SAM";
                }else if(childWeight >= 6.3 && childWeight <= 6.7){
                    return "MAM";
                }else if(childWeight >= 6.8 && childWeight <= 9.8){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 70){
                if(childWeight >= 0 && childWeight <= 6.3){
                    return "SAM";
                }else if(childWeight >= 6.4 && childWeight <= 6.9){
                    return "MAM";
                }else if(childWeight >= 7.0 && childWeight <= 10.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 71){
                if(childWeight >= 0 && childWeight <= 6.5){
                    return "SAM";
                }else if(childWeight >= 6.6 && childWeight <= 7.0){
                    return "MAM";
                }else if(childWeight >= 7.1 && childWeight <= 10.3){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 72){
                if(childWeight >= 0 && childWeight <= 6.6){
                    return "SAM";
                }else if(childWeight >= 6.7 && childWeight <= 7.2){
                    return "MAM";
                }else if(childWeight >= 7.3 && childWeight <= 10.5){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 73){
                if(childWeight >= 0 && childWeight <= 6.8){
                    return "SAM";
                }else if(childWeight >= 6.9 && childWeight <= 7.4){
                    return "MAM";
                }else if(childWeight >= 7.5 && childWeight <= 10.7){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 74){
                if(childWeight >= 0 && childWeight <= 6.9){
                    return "SAM";
                }else if(childWeight >= 7.0 && childWeight <= 7.5){
                    return "MAM";
                }else if(childWeight >= 7.6 && childWeight <= 11.0){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}else if(childHeight == 75){
                if(childWeight >= 0 && childWeight <= 7.1){
                    return "SAM";
                }else if(childWeight >= 7.2 && childWeight <= 7.7){
                    return "MAM";
                }else if(childWeight >= 7.8 && childWeight <= 11.2){
                    return "NORMAL";
                }else{
                    return "N/A";
                }
}

        }
    }
    
    return "N/A";
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

function setNORMAL(){
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