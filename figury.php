<?php
    // Wyświetlanie strony z figurami 3D
    echo "<!DOCTYPE html>";
    echo "<html lang='pl'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Figury 3D w PHP</title>";
    echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js'></script>";
    echo "</head>";
    echo "<body style='margin: 0; overflow: hidden;'>";
    echo "<script>";
    echo "const scene = new THREE.Scene();";
    echo "const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);";
    echo "const renderer = new THREE.WebGLRenderer();";
    echo "renderer.setSize(window.innerWidth, window.innerHeight);";
    echo "document.body.appendChild(renderer.domElement);";
    
    // Tworzenie figur
    echo "const geometries = [";
    echo "    new THREE.BoxGeometry(), // Sześcian";
    echo "    new THREE.SphereGeometry(0.5, 32, 32), // Kula";
    echo "    new THREE.ConeGeometry(0.5, 1, 32), // Stożek";
    echo "    new THREE.CylinderGeometry(0.5, 0.5, 1, 32), // Cylinder";
    echo "    new THREE.TorusGeometry(0.5, 0.2, 16, 100) // Torus";
    echo "]";
    
    echo "const material = new THREE.MeshBasicMaterial({ color: 0x00ff00, wireframe: true });";
    
    echo "const meshes = geometries.map((geometry, index) => {";
    echo "    const mesh = new THREE.Mesh(geometry, material);";
    echo "    mesh.position.x = (index - 2) * 2;";
    echo "    scene.add(mesh);";
    echo "    return mesh;";
    echo "});";
    
    echo "camera.position.z = 3;";
    
    // Animacja
    echo "function animate() {";
    echo "    requestAnimationFrame(animate);";
    echo "    meshes.forEach(mesh => mesh.rotation.y += 0.01);";
    echo "    renderer.render(scene, camera);";
    echo "}";
    echo "animate();";
    
    echo "</script>";
    echo "</body>";
    echo "</html>";
