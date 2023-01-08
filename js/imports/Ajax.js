export class Ajax {
	response;
	constructor(path, data, method = "POST") {
		this.path = path;
		this.data = data;
		this.method = method;
	}
	postData(callback) {
		let xhr = new XMLHttpRequest();

		xhr.addEventListener("readystatechange", () => {
			if (xhr.status === 200 && xhr.readyState === 4) {
				callback(xhr.responseText);
			}
		});
		xhr.open(this.method, this.path);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xhr.send(this.data);
	}

	getResponse() {
		return this.response;
	}
}
