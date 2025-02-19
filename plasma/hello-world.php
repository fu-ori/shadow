<div class="fuori">
		<img src="fuori-light.svg">
	</div>
	<script>
    // Cena
		const scene = new THREE.Scene();

    // Câmera
		const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

    // Renderizador
		const renderer = new THREE.WebGLRenderer();
		renderer.setSize(window.innerWidth, window.innerHeight);
		document.body.appendChild(renderer.domElement);

    // Cubo
		const geometry = new THREE.BoxGeometry();
		const material = new THREE.MeshBasicMaterial({ color: 0x86efac });
		const cube = new THREE.Mesh(geometry, material);
		scene.add(cube);

    // Posição da câmera
		camera.position.z = 5;

    // Função de animação
		function animate() {
			requestAnimationFrame(animate);

      // Rotação do cubo
			cube.rotation.x += 0.01;
			cube.rotation.y += 0.01;

      // Renderizar a cena
			renderer.render(scene, camera);
			renderer.setClearColor(0x616161); // Azul
		}

		animate();
	</script>