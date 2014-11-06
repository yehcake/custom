function getEstimate(size, difficulty, toppers) {
    var total = getTotal(size, difficulty, toppers);
    var lowerBound = getLowerBound(total);
    var upperBound = getUpperBound(total);
    if (lowerBound == upperBound) {
        return formatAsDollar(lowerBound);
    } else {
        return formatAsDollar(lowerBound) + " ~ " + formatAsDollar(upperBound);
    }
}

function formatAsDollar(num) {
    var numStr = num.toString();
    return "NT$" + numStr.substr(0, numStr.length - 3) + "," + numStr.substr(numStr.length - 3, 3);
}

function getLowerBound(num) {
    var result = round(num * 0.6);
    if (result > getMinPricing()) {
        return result;
    } else {
        return getMinPricing();
    }
}

function getMinPricing() {
    return 3000;
}

function getUnitPrice(difficulty) {
    var base = 80;
    return (base + 20 * difficulty);
}

function getExtendedPrice(size, difficulty) {
    return (size * getUnitPrice(difficulty));
}

function getTotal(size, difficulty, toppers) {
    var base = 1000;
    return (base * toppers + getExtendedPrice(size, difficulty));
}

function getUpperBound(num) {
    var result = round(num * 1.4);
    if (result > getMinPricing()) {
        return result;
    } else {
        return getMinPricing();
    }
}

function round(num) {
    return 100 * Math.round(num/100);
}