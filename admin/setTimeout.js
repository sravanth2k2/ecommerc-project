console.log("1:Start App")

setTimeout{()=>
	{
		console.log("2: in inside the callback");
	},
	3000
};
console.log("3: End of the app");