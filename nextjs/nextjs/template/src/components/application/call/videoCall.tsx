"use client";
/* eslint-disable @next/next/no-img-element */
import React, { useState } from "react";
import Link from "next/link";
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
// import Slider from 'react-slick';
import Scrollbars from "react-custom-scrollbars-2";
import { Phone, Plus, X } from "react-feather";
import Slider from "react-slick";
type MicStatus = {
  mic1: boolean;
  mic2: boolean;
  mic3: boolean;
  mic4: boolean;
  mic5: boolean;
  mic6: boolean;
  mic7: boolean;
  mic8: boolean;
  mic9: boolean;
  mic10: boolean;
  mic11: boolean;
  mic12: boolean;
};
type VideoStatusType = {
  video1: boolean;
  video2: boolean;
  video3: boolean;
  video4: boolean;
  video5: boolean;
  video6: boolean;
  video7: boolean;
  video8: boolean;
 
};

const VideoCallComponent = () => {
  const [videoStatus, setVideoStatus] = useState<VideoStatusType>({
    video1: false,
    video2: false,
    video3: false,
    video4: false,
    video5: false,
    video6: false,
    video7: false,
    video8: false,
    
  });
  const toggleVideo = (videoKey: keyof VideoStatusType) => {
    setVideoStatus((prevStatus) => ({
      ...prevStatus,
      [videoKey]: !prevStatus[videoKey],
    }));
  };

  const [addClass, setAddClass] = useState(false);
  const [isShow, setShow] = useState(false);
  const [isVisible, setIsVisible] = useState(false);

  const [isMuted, setIsMuted] = useState(false);
  const [isAudioMuted, setAudioIsMuted] = useState(false);
  const [micStatus, setMicStatus] = useState<MicStatus>({
    mic1: false,
    mic2: false,
    mic3: false,
    mic4: false,
    mic5: false,
    mic6: false,
    mic7: false,
    mic8: false,
    mic9: false,
    mic10: false,
    mic11: false,
    mic12: false,
  });

  const [isVideoOff, setIsVideoOff] = useState(false);

  // const toggleVideo = () => {
  //   setIsVideoOff((prevIsVideoOff) => !prevIsVideoOff);
  // };

  const toggleMute = () => {
    setIsMuted(!isMuted);
  };
  const toggleAudioMute = () => {
    setAudioIsMuted(!isAudioMuted);
  };
  const toggleMic = (micKey: keyof MicStatus) => {
    setMicStatus((prevState) => ({
      ...prevState,
      [micKey]: !prevState[micKey],
    }));
  };

  const handleShowClass = () => {
    setShow(true);
    setAddClass(true);
    setIsVisible(false);
  };

  const handleShowremoveClass = () => {
    setShow(false);
    setAddClass(false);
  };

  const handleAddVisible = () => {
    setIsVisible(true);
    setAddClass(true);
    setShow(false);
  };

  const handleRemoveVisible = () => {
    setIsVisible(false);
    setAddClass(false);
  };

  const settings = {
    dots: false,
    autoplay: false,
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 776,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 567,
        settings: {
          slidesToShow: 4,
        },
      },
    ],
  };

  return (
    <div className="page-wrapper">
      <div className="content">
        <div className="page-header d-flex justify-content-end">
          <div></div>
        </div>
        {/* /product list */}
        <div className="card">
          <div className="card-body">
            <div className="row">
              <div className="col-xl-12">
                <div className="conference-meet-group">
                  <div
                    className={
                      addClass ? "meeting-list add-meeting" : "meeting-list"
                    }
                  >
                    <div className="recession-meet-blk">
                      <div className="reccession-head">
                        <h5>2023 Stock Conference Meeting</h5>
                        <ul className="nav">
                          <li>Thursday, 19 January 2023 </li>
                        </ul>
                      </div>
                      <div className="partispant-blk">
                        <Link href="#" className="btn btn-primary me-2">
                          <Plus />
                          Add Participants
                        </Link>
                        <span
                          className="partispant-chat me-2"
                          onClick={handleShowClass}
                        >
                          <Link href="#" id="show-message">
                            <i className="bx bx-message-alt-dots" />
                          </Link>
                        </span>
                        <span
                          className="partispant-users"
                          onClick={handleAddVisible}
                        >
                          <Link href="#" id="add-partispant">
                            <i className="bx bx-user" />
                          </Link>
                        </span>
                      </div>
                    </div>
                    {/* Horizontal View */}
                    <div className="join-contents horizontal-view fade-whiteboard d-block">
                      <div className="join-video user-active">
                        <img
                          src="assets/img/join-call.jpg"
                          className="img-fluid"
                          alt="Logo"
                        />
                        <div
                          className={`video-avatar ${isMuted ? "active" : ""}`}
                        >
                          <div className="text-avatar">
                            <div className="text-box">S</div>
                          </div>
                        </div>
                        <div className="record-time">
                          <span>40:12</span>
                        </div>
                        <div className="audio-volume">
                          <input
                            className="custom-input"
                            type="range"
                            min={0}
                            max={100}
                            step="any"
                            defaultValue={0}
                          />
                          <span className="volume-icons">
                            <Link href="#">
                              <i className="feather feather-volume-2" />
                            </Link>
                          </span>
                        </div>
                        {/*<div class="volume-col">
                                      <div class="inner-volume-col text-center">
                                          <div id="player" class="" >
                                              <div id="volume"></div>
                                          </div>
                                          <span class="volume-icons"><i data-feather="volume-2"></i></span>
                                      </div>
                                  </div>*/}
                        <div
                          className={`more-icon ${
                            isAudioMuted ? "mic-view" : ""
                          }`}
                        >
                          <Link href="#" className="mic-off">
                            <i className="bx bx-microphone-off" />
                          </Link>
                        </div>
                      </div>
                      <Slider {...settings} className="video-slide d-flex">
                        <div className="join-video single-user">
                          <img
                            src="assets/img/users/user-01.jpg"
                            className="img-fluid"
                            alt="Logo"
                          />
                          <div className="part-name sub-part-name">
                            <h4>Barbara</h4>
                          </div>
                          <div className="more-icon">
                            <Link
                              href="#"
                              className={
                                micStatus.mic1
                                  ? "other-mic-off"
                                  : "other-mic-off stop"
                              }
                              onClick={() => toggleMic("mic1")}
                            >
                              <i
                                className={`bx ${
                                  micStatus.mic1
                                    ? "bx-microphone-off"
                                    : "bx-microphone"
                                }`}
                              />
                            </Link>
                          </div>
                        </div>
                        <div className="join-video single-user">
                          <img
                            src="assets/img/users/user-02.jpg"
                            className="img-fluid"
                            alt="Logo"
                          />
                          <div className="part-name sub-part-name">
                            <h4>Linnea</h4>
                          </div>
                          <div className="more-icon">
                            <Link
                              href="#"
                              className={
                                micStatus.mic2
                                  ? "other-mic-off"
                                  : "other-mic-off stop"
                              }
                              onClick={() => toggleMic("mic2")}
                            >
                              <i
                                className={`bx ${
                                  micStatus.mic2
                                    ? "bx-microphone-off"
                                    : "bx-microphone"
                                }`}
                              />
                            </Link>
                          </div>
                        </div>
                        <div className="join-video single-user">
                          <img
                            src="assets/img/users/user-05.jpg"
                            className="img-fluid"
                            alt="Logo"
                          />
                          <div className="part-name sub-part-name">
                            <h4>Richard</h4>
                          </div>
                          <div className="more-icon">
                            <Link
                              href="#"
                              className={
                                micStatus.mic3
                                  ? "other-mic-off"
                                  : "other-mic-off stop"
                              }
                              onClick={() => toggleMic("mic3")}
                            >
                              <i
                                className={`bx ${
                                  micStatus.mic3
                                    ? "bx-microphone-off"
                                    : "bx-microphone"
                                }`}
                              />
                            </Link>
                          </div>
                        </div>
                        <div className="join-video single-user">
                          <img
                            src="assets/img/users/user-03.jpg"
                            className="img-fluid"
                            alt="Logo"
                          />
                          <div className="part-name sub-part-name">
                            <h4>Freda</h4>
                          </div>
                          <div className="more-icon">
                            <Link
                              href="#"
                              className={
                                micStatus.mic4
                                  ? "other-mic-off"
                                  : "other-mic-off stop"
                              }
                              onClick={() => toggleMic("mic4")}
                            >
                              <i
                                className={`bx ${
                                  micStatus.mic4
                                    ? "bx-microphone-off"
                                    : "bx-microphone"
                                }`}
                              />
                            </Link>
                          </div>
                        </div>
                      </Slider>
                    </div>
                    {/* /Horizontal View */}
                  </div>
                  <div
                    className={
                      isVisible
                        ? "right-user-side right-partisipants right-side-party theiaStickySidebar mb-2 open-message"
                        : "right-user-side right-partisipants right-side-party theiaStickySidebar mb-2"
                    }
                    id="add-party"
                  >
                    <div className=" slime-grp">
                      <div className="left-chat-title">
                        <div className="chat-title">
                          <h4>
                            Participant <span>10</span>
                          </h4>
                        </div>
                        <div
                          className="contact-close_call"
                          onClick={handleRemoveVisible}
                        >
                          <Link href="#" className="close_profile close_profile4">
                            <X />
                          </Link>
                        </div>
                      </div>
                      <div className="card-body-blk slimscroll">
                        <div className="party-msg-blk ">
                          <ul className="user-list mt-2">
                            <li>
                              <div className="user-list-item">
                                <div className="avatar ">
                                  <img
                                    src="assets/img/users/user-02.jpg"
                                    alt="image"
                                  />
                                </div>
                                <div className="users-list-body">
                                  <div className="name-list-user out-going-call">
                                    <h5>Maybelle</h5>
                                  </div>
                                  <div className="last-call-time">
                                    <div className="call-recent recent-part me-1">
                                      <Link
                                        href="#"
                                        className={
                                          micStatus.mic5
                                            ? "other-mic-off stop"
                                            : "other-mic-off"
                                        }
                                        onClick={() => toggleMic("mic5")}
                                      >
                                        <i
                                          className={`bx ${
                                            micStatus.mic5
                                              ? "bx-microphone-off"
                                              : "bx-microphone"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                    <div className="call-recent recent-part">
                                      <Link
                                        href="#"
                                        className={
                                          videoStatus.video1
                                            ? "other-video-off-stop"
                                            : "other-video-off"
                                        }
                                        onClick={() => toggleVideo("video1")}
                                      >
                                        <i
                                          className={`bx ${
                                            videoStatus.video1
                                              ? "bx-video-off"
                                              : "bx-video"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div className="user-list-item">
                                <div className="avatar ">
                                  <img
                                    src="assets/img/users/user-03.jpg"
                                    alt="image"
                                  />
                                </div>
                                <div className="users-list-body">
                                  <div className="name-list-user out-going-call">
                                    <h5>Benjamin</h5>
                                  </div>
                                  <div className="last-call-time">
                                    <div className="call-recent recent-part me-1">
                                      <Link
                                        href="#"
                                        className={
                                          micStatus.mic6
                                            ? "other-mic-off stop"
                                            : "other-mic-off"
                                        }
                                        onClick={() => toggleMic("mic6")}
                                      >
                                        <i
                                          className={`bx ${
                                            micStatus.mic6
                                              ? "bx-microphone-off"
                                              : "bx-microphone"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                    <div className="call-recent recent-part">
                                      <Link
                                        href="#"
                                        className={
                                          videoStatus.video2
                                            ? "other-video-off-stop"
                                            : "other-video-off"
                                        }
                                        onClick={() => toggleVideo("video2")}
                                      >
                                        <i
                                          className={`bx ${
                                            videoStatus.video2
                                              ? "bx-video-off"
                                              : "bx-video"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div className="user-list-item">
                                <div className="avatar ">
                                  <img
                                    src="assets/img/users/user-04.jpg"
                                    alt="image"
                                  />
                                </div>
                                <div className="users-list-body">
                                  <div className="name-list-user out-going-call">
                                    <h5>Kaitlin</h5>
                                  </div>
                                  <div className="last-call-time">
                                    <div className="call-recent recent-part me-1">
                                      <Link
                                        href="#"
                                        className={
                                          micStatus.mic7
                                            ? "other-mic-off stop"
                                            : "other-mic-off"
                                        }
                                        onClick={() => toggleMic("mic7")}
                                      >
                                        <i
                                          className={`bx ${
                                            micStatus.mic7
                                              ? "bx-microphone-off"
                                              : "bx-microphone"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                    <div className="call-recent recent-part">
                                      <Link
                                        href="#"
                                        className={
                                          videoStatus.video3
                                            ? "other-video-off-stop"
                                            : "other-video-off"
                                        }
                                        onClick={() => toggleVideo("video3")}
                                      >
                                        <i
                                          className={`bx ${
                                            videoStatus.video3
                                              ? "bx-video-off"
                                              : "bx-video"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div className="user-list-item">
                                <div className="avatar ">
                                  <img
                                    src="assets/img/users/user-05.jpg"
                                    alt="image"
                                  />
                                </div>
                                <div className="users-list-body">
                                  <div className="name-list-user out-going-call">
                                    <h5>Alwin</h5>
                                  </div>
                                  <div className="last-call-time">
                                    <div className="call-recent recent-part me-1">
                                      <Link
                                        href="#"
                                        className={
                                          micStatus.mic8
                                            ? "other-mic-off stop"
                                            : "other-mic-off"
                                        }
                                        onClick={() => toggleMic("mic8")}
                                      >
                                        <i
                                          className={`bx ${
                                            micStatus.mic8
                                              ? "bx-microphone-off"
                                              : "bx-microphone"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                    <div className="call-recent recent-part">
                                    <Link
                                        href="#"
                                        className={
                                          videoStatus.video4
                                            ? "other-video-off-stop"
                                            : "other-video-off"
                                        }
                                        onClick={() => toggleVideo("video4")}
                                      >
                                        <i
                                          className={`bx ${
                                            videoStatus.video4
                                              ? "bx-video-off"
                                              : "bx-video"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div className="user-list-item">
                                <div className="avatar ">
                                  <img
                                    src="assets/img/users/user-06.jpg"
                                    alt="image"
                                  />
                                </div>
                                <div className="users-list-body">
                                  <div className="name-list-user out-going-call">
                                    <h5>Freda</h5>
                                  </div>
                                  <div className="last-call-time">
                                    <div className="call-recent recent-part me-1">
                                      <Link
                                        href="#"
                                        className={
                                          micStatus.mic9
                                            ? "other-mic-off stop"
                                            : "other-mic-off"
                                        }
                                        onClick={() => toggleMic("mic9")}
                                      >
                                        <i
                                          className={`bx ${
                                            micStatus.mic9
                                              ? "bx-microphone-off"
                                              : "bx-microphone"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                    <div className="call-recent recent-part">
                                    <Link
                                        href="#"
                                        className={
                                          videoStatus.video5
                                            ? "other-video-off-stop"
                                            : "other-video-off"
                                        }
                                        onClick={() => toggleVideo("video5")}
                                      >
                                        <i
                                          className={`bx ${
                                            videoStatus.video5
                                              ? "bx-video-off"
                                              : "bx-video"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div className="user-list-item">
                                <div className="avatar ">
                                  <img
                                    src="assets/img/users/user-08.jpg"
                                    alt="image"
                                  />
                                </div>
                                <div className="users-list-body">
                                  <div className="name-list-user out-going-call">
                                    <h5>John Doe</h5>
                                  </div>
                                  <div className="last-call-time">
                                    <div className="call-recent recent-part me-1">
                                      <Link
                                        href="#"
                                        className={
                                          micStatus.mic10
                                            ? "other-mic-off stop"
                                            : "other-mic-off"
                                        }
                                        onClick={() => toggleMic("mic10")}
                                      >
                                        <i
                                          className={`bx ${
                                            micStatus.mic10
                                              ? "bx-microphone-off"
                                              : "bx-microphone"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                    <div className="call-recent recent-part">
                                    <Link
                                        href="#"
                                        className={
                                          videoStatus.video8
                                            ? "other-video-off-stop"
                                            : "other-video-off"
                                        }
                                        onClick={() => toggleVideo("video8")}
                                      >
                                        <i
                                          className={`bx ${
                                            videoStatus.video8
                                              ? "bx-video-off"
                                              : "bx-video"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div className="user-list-item">
                                <div className="avatar ">
                                  <img
                                    src="assets/img/users/user-09.jpg"
                                    alt="image"
                                  />
                                </div>
                                <div className="users-list-body">
                                  <div className="name-list-user out-going-call">
                                    <h5>John Blair</h5>
                                  </div>
                                  <div className="last-call-time">
                                    <div className="call-recent recent-part me-1">
                                      <Link
                                        href="#"
                                        className={
                                          micStatus.mic11
                                            ? "other-mic-off stop"
                                            : "other-mic-off"
                                        }
                                        onClick={() => toggleMic("mic11")}
                                      >
                                        <i
                                          className={`bx ${
                                            micStatus.mic11
                                              ? "bx-microphone-off"
                                              : "bx-microphone"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                    <div className="call-recent recent-part">
                                    <Link
                                        href="#"
                                        className={
                                          videoStatus.video6
                                            ? "other-video-off-stop"
                                            : "other-video-off"
                                        }
                                        onClick={() => toggleVideo("video6")}
                                      >
                                        <i
                                          className={`bx ${
                                            videoStatus.video6
                                              ? "bx-video-off"
                                              : "bx-video"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div className="user-list-item mb-0">
                                <div className="avatar ">
                                  <img
                                    src="assets/img/users/user-10.jpg"
                                    alt="image"
                                  />
                                </div>
                                <div className="users-list-body">
                                  <div className="name-list-user out-going-call">
                                    <h5>Joseph Collins</h5>
                                  </div>
                                  <div className="last-call-time">
                                    <div className="call-recent recent-part me-1">
                                      <Link
                                        href="#"
                                        className={
                                          micStatus.mic12
                                            ? "other-mic-off stop"
                                            : "other-mic-off"
                                        }
                                        onClick={() => toggleMic("mic12")}
                                      >
                                        <i
                                          className={`bx ${
                                            micStatus.mic12
                                              ? "bx-microphone-off"
                                              : "bx-microphone"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                    <div className="call-recent recent-part">
                                    <Link
                                        href="#"
                                        className={
                                          videoStatus.video7
                                            ? "other-video-off-stop"
                                            : "other-video-off"
                                        }
                                        onClick={() => toggleVideo("video7")}
                                      >
                                        <i
                                          className={`bx ${
                                            videoStatus.video7
                                              ? "bx-video-off"
                                              : "bx-video"
                                          }`}
                                        />
                                      </Link>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    className={
                      isShow
                        ? "right-user-side chat-rooms theiaStickySidebar mb-2 open-chats"
                        : "right-user-side chat-rooms theiaStickySidebar mb-2"
                    }
                    id="chat-room"
                  >
                    <Scrollbars>
                      <div className="slime-grp">
                        <div className="left-chat-title">
                          <div className="chat-title">
                            <h4>Message</h4>
                          </div>
                          <div
                            className="contact-close_call"
                            onClick={handleShowremoveClass}
                          >
                            <Link
                              href="#"
                              className="close_profile close_profile4"
                            >
                              <X />
                            </Link>
                          </div>
                        </div>
                        <div className="card-body-blk slimscroll p-0">
                          <div className="chat-msg-blk ">
                            <div className="chats">
                              <div className="chat-avatar">
                                <img
                                  src="assets/img/users/user-01.jpg"
                                  className="dreams_chat"
                                  alt="image"
                                />
                              </div>
                              <div className="chat-content">
                                <div className="message-content">
                                  <h4>Hi Everyone.!</h4>
                                </div>
                                <div className="chat-profile-name d-flex justify-content-end">
                                  <h6>10:00 AM</h6>
                                </div>
                              </div>
                            </div>
                            <div className="chats chats-right">
                              <div className="chat-content">
                                <div className="message-content">
                                  <h4>
                                    Good Morning..! Today we have meeting about
                                    the new product.
                                  </h4>
                                </div>
                                <div className="chat-profile-name text-end">
                                  <h6>
                                    <i className="bx bx-check-double" /> 10:00
                                  </h6>
                                </div>
                              </div>
                              <div className="chat-avatar">
                                <img
                                  src="assets/img/users/user-02.jpg"
                                  className=" dreams_chat"
                                  alt="image"
                                />
                              </div>
                            </div>
                            <div className="chats">
                              <div className="chat-avatar">
                                <img
                                  src="assets/img/users/user-01.jpg"
                                  className=" dreams_chat"
                                  alt="image"
                                />
                              </div>
                              <div className="chat-content">
                                <div className="message-content">
                                  <h4>Hi.! Good Morning all.</h4>
                                </div>
                                <div className="chat-profile-name d-flex justify-content-end">
                                  <h6>10:00 AM</h6>
                                </div>
                              </div>
                            </div>
                            <div className="chats">
                              <div className="chat-avatar">
                                <img
                                  src="assets/img/users/user-01.jpg"
                                  className=" dreams_chat"
                                  alt="image"
                                />
                              </div>
                              <div className="chat-content">
                                <div className="message-content">
                                  <h4>Nice..which category it belongs to?</h4>
                                </div>
                                <div className="chat-profile-name d-flex justify-content-end">
                                  <h6>10:00 AM</h6>
                                </div>
                              </div>
                            </div>
                            <div className="chats">
                              <div className="chat-avatar">
                                <img
                                  src="assets/img/users/user-01.jpg"
                                  className=" dreams_chat"
                                  alt="image"
                                />
                              </div>
                              <div className="chat-content">
                                <div className="message-content">
                                  <h4>
                                    Great.! This is the second new product that
                                    comes in this week.
                                  </h4>
                                </div>
                                <div className="chat-profile-name d-flex justify-content-end">
                                  <h6>10:00 AM</h6>
                                </div>
                              </div>
                            </div>
                            <div className="chats">
                              <div className="chat-avatar">
                                <img
                                  src="assets/img/users/user-01.jpg"
                                  className=" dreams_chat"
                                  alt="image"
                                />
                              </div>
                              <div className="chat-content">
                                <div className="message-content">
                                  <h4>Hi.! Good Morning all.</h4>
                                </div>
                                <div className="chat-profile-name d-flex justify-content-end">
                                  <h6>10:00 AM</h6>
                                </div>
                              </div>
                            </div>
                            <div className="chats">
                              <div className="chat-avatar">
                                <img
                                  src="assets/img/users/user-01.jpg"
                                  className=" dreams_chat"
                                  alt="image"
                                />
                              </div>
                              <div className="chat-content">
                                <div className="message-content">
                                  <h4>Nice..which category it belongs to?</h4>
                                </div>
                                <div className="chat-profile-name d-flex justify-content-end">
                                  <h6>10:00 AM</h6>
                                </div>
                              </div>
                            </div>
                            <div className="chats chats-right">
                              <div className="chat-content">
                                <div className="message-content">
                                  <h4>
                                    Good Morning..! Today we have meeting about
                                    the new product.
                                  </h4>
                                </div>
                                <div className="chat-profile-name text-end">
                                  <h6>
                                    <i className="bx bx-check-double" /> 10:00
                                  </h6>
                                </div>
                              </div>
                              <div className="chat-avatar">
                                <img
                                  src="assets/img/users/user-02.jpg"
                                  className="dreams_chat"
                                  alt="image"
                                />
                              </div>
                            </div>
                            <div className="chats mb-0">
                              <div className="chat-avatar">
                                <img
                                  src="assets/img/users/user-01.jpg"
                                  className=" dreams_chat"
                                  alt="image"
                                />
                              </div>
                              <div className="chat-content">
                                <div className="message-content">
                                  <h4>
                                    Great.! This is the second new product that
                                    comes in this week.
                                  </h4>
                                </div>
                                <div className="chat-profile-name d-flex justify-content-end">
                                  <h6>10:00 AM</h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div className="chat-footer">
                            <form>
                              <div className="smile-col comman-icon">
                                <Link href="#">
                                  <i className="far fa-smile" />
                                </Link>
                              </div>
                              <div className="attach-col comman-icon">
                                <Link href="#">
                                  <i className="fas fa-paperclip" />
                                </Link>
                              </div>
                              <div className="micro-col comman-icon">
                                <Link href="#">
                                  <i className="bx bx-microphone" />
                                </Link>
                              </div>
                              <input
                                type="text"
                                className="form-control chat_form"
                                placeholder="Enter Message....."
                              />
                              <div className="send-chat comman-icon">
                                <Link href="#">
                                  <i data-feather="send" />
                                </Link>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </Scrollbars>
                  </div>
                </div>
                <div className="meet-call-menu-blk">
                  <div className="video-call-action">
                    <ul className="nav">
                      <li>
                        <Link
                          href="#"
                          className={isAudioMuted ? "mute-bt stop" : "mute-bt"}
                          onClick={toggleAudioMute}
                        >
                          <i
                            className={`bx ${
                              isAudioMuted
                                ? "bx-microphone-off"
                                : "bx-microphone"
                            }`}
                          />
                        </Link>
                      </li>
                      <li>
                        <Link href="#" className="call-end">
                          <Phone />
                        </Link>
                      </li>
                      <li>
                        <Link
                          href="#"
                          className={isMuted ? "mute-video stop" : "mute-video"}
                          onClick={toggleMute}
                        >
                          <i
                            className={`bx ${
                              isMuted ? "bx-video-off" : "bx-video"
                            }`}
                          />
                        </Link>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/* /product list */}
      </div>
    </div>
  );
};

export default VideoCallComponent;
