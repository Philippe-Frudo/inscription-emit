export class FormulaireInscription {

    constructor(input){
        let nameClass = (a) => document.querySelector(a);
        let champsInputs = (a) => document.querySelectorAll(a);

        this.parcours = nameClass(".parcours").value,
        this.centreExamenConcours = nameClass(".centerExam").value,
        this.nom = nameClass("input.nom").value,
        this.prenom = nameClass("input.prenom").value,
        this.dateNaissance = nameClass("input.dateNaissance").value,
        this.lieuNaissance = nameClass("input.lieuNaissance").value,
        this.sexe = nameClass("input.sexe").value,
        this.situationMatrimonial = nameClass(".situationMatrimonial").value,
        this.nationalite = nameClass(".nationalite").value,
        this.tel = nameClass("input.tel").value,
        this.adrs = nameClass("input.adresPostal").value,
        this.numIncsriptionBacc = nameClass("input.numIncsriptionBacc").value,
        this.centreBacc = nameClass("input.centreBacc").value,
        this.serieBacc = nameClass(".serieBacc").value,
        this.mentionBacc = nameClass(".mentionBacc").value,
        // this.allimagesInsci = champsInputs('input[type="file"]').value,
        this.imgPayment = nameClass("input.imgPayment").value,
        this.imgFiche = nameClass("input.imgFiche").value,
        this.imgDemande = nameClass("input.imgDemande").value,
        this.imgDiplome = nameClass("input.imgDiplome").value,
        this.imgAEC = nameClass("input.imgAEC").value,
        this.imgIdentite = nameClass("input.imgIdentite").value;
    
    }
}





