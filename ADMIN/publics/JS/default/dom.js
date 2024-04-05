//CREATE ELEMENT
/**
 * 
 * @param {Element} element 
 * @param {Object} attributes 
 * @returns {HTMLElement}
 */
export function createElementE(element, attributes){
    let ele= document.createElement(element);
    for (const [keyattr, valattr] of Object.entries(attributes)) {
        ele.setAttribute(keyattr, valattr);
    }
    return ele;
}

