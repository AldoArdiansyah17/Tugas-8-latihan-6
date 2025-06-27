pipeline {
    agent any

    stages {
        stage('Build Docker Image') {
            steps {
                sh 'docker build -t php-simple-app .'
            }
        }

        stage('Run Container') {
            steps {
                sh 'docker run -d --name php-app -p 8081:8081 php-simple-app'
                sh 'sleep 5' // tunggu server PHP siap
            }
        }

        stage('Test') {
            steps {
                sh 'php test.php'
            }
            post {
                success {
                    echo 'Tes berhasil!'
                }
                failure {
                    echo 'Tes gagal!'
                }
            }
        }

        stage('Deploy (simulasi)') {
            steps {
                echo 'Aplikasi berhasil dijalankan dalam container.'
            }
        }
    }

    post {
        always {
            echo 'Membersihkan container dan image...'
            sh 'docker rm -f php-app || true'
            sh 'docker rmi php-simple-app || true'
        }
    }
}
