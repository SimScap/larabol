
/**
 * § Class Product
 *
 * Outlines a Product class
 */
export class Product {
    /**
     * Class Product constructor
     *
     * @param {*} name The product name
     * @param {*} description The product description
     * @param {*} price Product price
     * @param {*} category Product category
     * @param {*} imageUrl Product image url
     * @param {*} likes Product likes, set to 0 by default
     */
    constructor(name, description, price, category, imageUrl, likes = 0){
        this.name = name;
        this.description = description;
        this.price = price;
        this.category = category;
        this.imageUrl = imageUrl;
        this.likes = likes;
    }

    /**
     * Function that adds a like to the given product
     * @returns the current number of likes
     */
    addLike(){
        return this.likes++;
    }

    /**
     * Function that removes a like from the given product
     * @returns the current number of likes
     */
    removeLike(){
        return this.likes--;
    }
}

