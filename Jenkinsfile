pipeline {
agent any
stages {


stage('Get Repo') {
steps {
    sh 'sudo rm -r /var/lib/jenkins/workspace/theti-test/*'
    git branch: 'master', url: 'https://github.com/alexdoe99/theti-test.git'
    }
}

stage('old build down') {
steps {
    sh 'sudo chmod 777 -R /var/run/docker.sock'
    sh 'sudo chmod 777 -R /var/lib/jenkins/workspace/theti-test/'
    sh 'cd /var/lib/jenkins/workspace/theti-test/ && docker-compose down'
}
}




stage('Build UP') {
steps {

/*sh 'docker build -t theti .'
sh 'docker run -d -p 8000:8000 theti ' */
sh 'cd /var/lib/jenkins/workspace/theti-test/ && docker-compose up -d'
}
}
stage('Test') {
steps {
sh 'cd /var/lib/jenkins/workspace/theti-test && phpunit --log-junit result.xml UnitTestFiles/Test/'
}
}

}
}
