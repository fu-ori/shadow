<div class="fuori">
	<img src="soul/fuori-light.svg">
</div>

<script type="text/javascript">
	const scene = new THREE.Scene();
	const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
	const renderer = new THREE.WebGLRenderer();
	renderer.setSize(window.innerWidth, window.innerHeight);
	document.body.appendChild(renderer.domElement);

	const light = new THREE.PointLight(0xffffb3, 3, 100);
	light.position.set(1, 1, 10);
	scene.add(light);

	const geometry = new THREE.BoxGeometry();
	const material = new THREE.MeshStandardMaterial({ color: 0x333333, roughness: 0.1, metalness: 0.5 });
	const cube = new THREE.Mesh(geometry, material);
	scene.add(cube);

	camera.position.z = 3;

	function animate() {
		requestAnimationFrame(animate);
		cube.rotation.x += 0.02;
		cube.rotation.y += 0.02;
		renderer.render(scene, camera);
		renderer.setClearColor(0x616161); 
	}

	animate();
</script>