import { ROAST_CONFIG } from "config.js";

export default {
    /*
		GET 	/api/v1/cafes
	*/
    getCafes: function() {
        return axios.get(ROAST_CONFIG.API_URL + "/cafes");
    },

    /*
		POST 	/api/v1/cafes/{slug}/like
	*/
    postLikeCafe: function(slug) {
        return axios.post(ROAST_CONFIG.API_URL + "/cafes/" + slug + "/like");
    },

    /*
		DELETE /api/v1/cafes/{slug}/like
	*/
    deleteLikeCafe: function(slug) {
        return axios.delete(ROAST_CONFIG.API_URL + "/cafes/" + slug + "/like");
    },

    deleteCafe: function(slug) {
        return axios.delete(ROAST_CONFIG.API_URL + "/cafes/" + slug);
    }
};
