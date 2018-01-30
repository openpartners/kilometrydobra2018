$.fn.sorter = function(order, key, dataType) {
	var _that = this;
	this.sortingOrder = order;
	this.sortingAtribute = key;
	this.alphabet = '*!@_.()#^&%-=+01234567989aąbcćdeęfghijklłmnńoóprsśtuwyzźż';
	this.textSortingCallback = function(a, b){
		var aValue = $(a).data(_that.sortingAtribute);
		var bValue = $(b).data(_that.sortingAtribute);

		if (aValue !== undefined && bValue !== undefined) {
			var i = aValue.length;
			while (i--) {
				if (aValue.toLowerCase()[0] == bValue.toLowerCase()[0]) {
					aValue = aValue.substr(1);
					bValue = bValue.substr(1);
				}
			}
			if (_that.sortingOrder == 'asc') {
				return (_that.alphabet.indexOf(bValue.toLowerCase()[0])) < (_that.alphabet.indexOf(aValue.toLowerCase()[0])) ? 1 : -1;
			} else {
				return (_that.alphabet.indexOf(bValue.toLowerCase()[0])) > (_that.alphabet.indexOf(aValue.toLowerCase()[0])) ? 1 : -1;
			}

		} else {
			return 1;
		}
   };
   this.numberSortingCallback = function(a, b){
	   var aValue = $(a).data(_that.sortingAtribute);
	   var bValue = $(b).data(_that.sortingAtribute);

	   if (aValue !== undefined && bValue !== undefined) {
		   if (_that.sortingOrder == 'asc') {
			   return (bValue < aValue) ? 1 : -1;
		   } else {
			   return (bValue > aValue) ? 1 : -1;
		   }

	   } else {
		   return 1;
	   }
	 };

  if (dataType == 'text') {
         $('.records .row.sortable').sort(this.textSortingCallback).appendTo('.records');
   } else {
	   $('.records .row.sortable').sort(this.numberSortingCallback).appendTo('.records');
   }
	return this;
}
